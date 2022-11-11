<?php

namespace App\Http\Controllers;

use App\Cabo;
use App\Lme;
use App\Tarifa;
use Illuminate\Http\Request;

class LmeBoardController extends Controller
{
    public function index() {
        $tarifa  = Tarifa::find(1);
        $cabos = Cabo::all();
        $lme = Lme::all();

        return view('pages.lme-board.index', [
            'tarifa' => $tarifa,
            'cabos' => $cabos,
            'lme' => $lme
        ]);
    }
}
