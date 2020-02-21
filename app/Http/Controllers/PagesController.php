<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App;
use App\Eventos;
use App\Horariosacademia;
use App\Horarioalquileres;
use App\Staff;


class PagesController extends Controller
{
    public function index() {
        $Patrocinadores = App\Patrocinadores::all();
        $Eventos = App\Eventos::all();
        $noticias = App\Noticia::take(3)->get();

        /*dd($Patrocinadores,$Staff);*/
        return view('index',compact('Patrocinadores','Eventos', 'noticias'));

    }
    
    public function academia() {
        $Staff=App\Staff::all();
        $Horario = App\Horariosacademia::where('dias', '!=', 'sabado')->get();
        $Horariosabado = App\Horariosacademia::where('dias','sabado')->get();

                    
        return view('academia',compact('Horario','Horariosabado','Staff'));
    }

    public function alquileres() {

        $Galeriacanchas = App\Galeriacancha::all(); 
        $horariopromocion = App\Horarioalquileres::where('dias','lunes-martes')->get();   
        $horariosemana = App\Horarioalquileres::where('dias','!=','lunes-martes')->get();
        return view('alquileres',compact('Galeriacanchas','horariopromocion','horariosemana'));
    }

    public function palco() {
        /* $Galeriapalco = App\Galeriapalco::all(); */

        return view('palco'/* ,compact('Galeriapalco') */);
    }

    public function torneos() {
        return view('torneos');
    }

}