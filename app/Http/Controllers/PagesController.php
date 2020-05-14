<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App;
use App\Eventos;
use App\Horariosacademia;
use App\Horarioalquileres;
use App\Staff;
use App\Categoriaga;
use App\GaleriaAcademium;

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
        $Galeria=App\GaleriaAcademium::all();
        $categorias=App\Categoriaga::all();

        return view('academia',compact('Horario','Horariosabado','Staff','Galeria','categorias'));
    }

    public function alquileres() {

        $Galeriacanchas = App\Galeriacancha::all(); 
        $horariopromocion = App\Horarioalquileres::where('tipo','promocion')->get();  

        /*$hrpromo = json_decode($horariopromocion, true);*/
        
        
        $horariosemana = App\Horarioalquileres::where('tipo','!=','promocion')->get();
         /* dd($hrpromo); */
        

        //dd($horariopromocionDomingo);

        return view('alquileres',compact('Galeriacanchas','horariopromocion','horariosemana'));
    }

    public function palco() {
        /* $Galeriapalco = App\Galeriapalco::all(); */

        return view('palco'/* ,compact('Galeriapalco') */);
    }

    public function torneos() {

        $Galeriatorneos = App\GaleriaTorneo::all();
        return view('torneos', compact('Galeriatorneos'));
    }

}