<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

class ContactFormController extends Controller
{
    public function create() {
        return view('contact.create');
    }

    public function store(Request $request){

        $request->validate([

            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' =>'required',
            'email' =>'required|email',
            'asunto'=> 'not_in:0',
            'mensaje'=>'required'
            

        ],
        [ 'nombre.required' => 'Su nombre es obligatorio',
        'apellido.required'=> 'Su apellido es obligatorio',
        'telefono.required'=> 'Su telefono es obligatorio',
        'email.required' => 'Su email es obligatorio',
        'asunto.not_in'=> 'Es necesario que seleccione una opción',
        'mensaje.required' => 'Es necesario que escriba un mensaje'
        ]);

        $subject = "mensaje";
        $for = "kelsy.maradiaga@ujcv.edu.hn";
        Mail::send('email',$request->all(), function($msj) use($subject,$for){
           $msj->from("futecahn2020@gmail.com","Futeca");
           $msj->subject($subject);
            $msj->to($for);
        });
        return redirect()->back();

    }


}
