<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//importar metodos de la clase LoginRequest
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function show(){
        //metodo de validacion usando Auth, para validar si el usuario ya esta autenticado
        if(Auth::check()){
            return redirect('/home');
        }
        return view('auth.login');
    }

    public function login(LoginRequest $request){
        $credentials = $request->getCredentials(); //lamar a la funcion getCredentials del LoginRequest
        if(!Auth::validate($credentials)){
            return redirect()->to('/login')->withErrors('Usuario y contraseña incorrectos!');
        }
        $usuario = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($usuario);

        return $this->authenticated($request, $usuario);
    }

    public function authenticated(Request $request,$usuario){
        return redirect('/home');

    }
}
