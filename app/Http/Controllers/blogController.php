<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;
class blogController extends Controller
{
    public function getBlog(){
        $noticias = Noticia::all();

        return view('blog', compact('noticias'));
    }
}
