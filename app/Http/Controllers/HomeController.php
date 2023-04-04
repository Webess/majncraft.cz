<?php

namespace App\Http\Controllers;

use App\CustomClasses\MinecraftServerStatus;
use DB;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $status = new MinecraftServerStatus('s.majncraft.cz', 27844, 1);
        $players = [];

        if ($status->Get('online') && ($status->get('numplayers') > 0)) {
            foreach ($status->get('players') as $player) {
                $c = DB::connection('mysql_te')->table('litebans_history')->where('name', $player)->first();

                if ($c == null) {
                    $players[$player] = '8667ba71-b85a-4004-af54-457a9734eed7';
                } else {
                    $players[$player] = $c->uuid;
                }
            }
        }

        return view('home')
            ->with('status', $status)
            ->with('players', $players)
            ->with('online', $status->Get('online'));
    }
}
