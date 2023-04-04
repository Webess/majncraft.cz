<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\CustomClasses\MinecraftServerStatus;
use App\Models\WlAttempt;

/**
 * WIP
 */
class WhitelistController extends Controller
{
    public function index()
    {
        return view('whitelist');
    }

    public function startTest(Request $request)
    {
        $attempt_limit = 600; // 10 minutes
        $next_attempt = 3600; // 1 hour

        $attempt = WlAttempt::firstOrCreate([
            'username' => $request->username,
            'uuid' => $request->uuid,
        ], [
            'attempt_sum' => 0,
        ]);

        if (!$attempt->is_whitelisted && (($attempt->updated_at->unix() + $attempt_limit + $next_attempt) < time())) {
            $attempt->attempt_sum++;
            $attempt->save();
        }

        //TODO: select questions

        return response()->json([
            'is_whitelisted' => $attempt->is_whitelisted,
            'last_attempt' => $attempt->updated_at,
            'attempt_ends' => date('Y-m-d H:i:s', $attempt->updated_at->unix() + $attempt_limit),
            'can_continue_attempt' => (($attempt->updated_at->unix() + $attempt_limit) > time()) ? 1 : 0,
            'new_attempt' => (($attempt->updated_at->unix() + $attempt_limit + $next_attempt) < time()) ? 1 : 0,
        ]);
    }

    public function checkName(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|min:2',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'hasError' => true,
            ]);
        }

        $response = $this->checkMinecraftName($request->username);

        if (isset($response->id)) {
            return response()->json([
                'user'     => $response,
                'hasError' => false,
            ]);
        }

        return response()->json([
            'hasError' => true,
        ]);
    }

    private function checkMinecraftName($username)
    {
         $username = clean($username, ['AutoFormat.AutoParagraph' => false]);
         $response = file_get_contents("https://api.mojang.com/users/profiles/minecraft/$username");
         return json_decode($response);
    }

    private function getUuidWithDash($uuid)
    {
        $dash = "-";
        $uuid = substr_replace($uuid, $dash, 8, 0);
        $uuid = substr_replace($uuid, $dash, 13, 0);
        $uuid = substr_replace($uuid, $dash, 18, 0);
        return substr_replace($uuid, $dash, 23, 0);
    }
}
