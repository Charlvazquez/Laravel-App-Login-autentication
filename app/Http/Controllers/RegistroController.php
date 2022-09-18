<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//importar metodos de la clase RegisterRequest
use App\Http\Requests\RegisterRequest;
//importar Modelo
use App\Models\User;
//importar metodo Auth para usar sus clases
use Illuminate\Support\Facades\Auth;

class RegistroController extends Controller
{
    public function show(){
         //metodo de validacion usando Auth, para validar si el usuario ya esta autenticado
         if(Auth::check()){
            return redirect('/home');
        }
        return view('auth.registro');
    }

    public function registro(RegisterRequest $request){
        $usuario = User::create($request->validated());
        return redirect('/login')->with('success', "Cuenta Registrada exitosamente!");


    }
}
