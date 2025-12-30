<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaprodiController extends Controller
{
    public function showKaprodi(){
        return view('kaprodi.dashboard');
    }
}
