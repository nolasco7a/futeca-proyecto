<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;

class PagesController extends Controller
{
    public function index() {
        $Staff = App\Staff::all();
        $Patrocinadores = App\Patrocinadores::all();
        $Eventos = App\Eventos::all();

        /*dd($Patrocinadores,$Staff);*/
        return view('index',compact('Staff', 'Patrocinadores','Eventos'));
    }

    public function academia() {
        $Horario = App\Horariosacademia::where('dias', '!=', 'sabado')->get();
        $Horariosabado = App\Horariosacademia::where('dias','sabado')->get();
                    
        return view('academia',compact('Horario','Horariosabado',));
    }

    public function alquileres() {
        $Galeriacanchas = App\Galeriacancha::all();

        return view('alquileres',compact('Galeriacanchas'));
    }

    public function palco() {
        /* $Galeriapalco = App\Galeriapalco::all(); */

        return view('palco'/* ,compact('Galeriapalco') */);
    }

    public function torneos() {
        return view('torneos');
    }

}