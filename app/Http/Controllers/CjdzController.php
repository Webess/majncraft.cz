<?php

namespace App\Http\Controllers;

use App\Models\Cjdz;
use Illuminate\Http\Request;

class CjdzController extends Controller
{
    public function show(Cjdz $slug)
    {
        return view('cjdz')
            ->with('cjdz', $slug);
    }
}
