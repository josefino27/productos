<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\FormularioContacto;

class ContactoController extends Controller
{
    public function store(){
        
        $mensaje = request()->validate([
            'nombre' => 'required',
            'correo' => 'required|email',
            'asunto' => 'required',
            'mensaje' => 'required|min:5'
        ]);

        Mail::to('jodanu19@gmail.com')->queue(new FormularioContacto($mensaje));
        return "validado";

        }
}
