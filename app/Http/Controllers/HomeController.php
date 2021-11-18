<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\horometroCuarentaHoras;
use App\Models\horometroCientoVeinteHoras;
use App\Models\horometroMilHoras;
use App\Models\horometroDosMilHoras;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $horometroCuarentaHoras = horometroCuarentaHoras::all();
        $horometroCientoVeinteHoras = horometroCientoVeinteHoras::all();
        $horometroMilHoras = horometroMilHoras::all();
        $horometroDosMilHoras = horometroDosMilHoras::all();

        return view('home', compact('horometroCuarentaHoras', 'horometroCientoVeinteHoras', 'horometroMilHoras', 'horometroDosMilHoras'));
    }
}
