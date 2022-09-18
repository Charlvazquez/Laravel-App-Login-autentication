@extends('layouts.main')

@section('content')
    <h1>Bienvenido</h1>
    <!--metodo para mostrar contenido al usuario si se autentico-->
    @auth
        <p>Bienvenido {{auth()->user()->name ?? auth()->user()->username}}, estas autenticado</p>
        <!--{auth()->metodo "user"()->campo que usaremos de la dbb}-->
        <p>
            <a href="/logout">Cerrar Sesion</a>
        </p>
    @endauth

    <!--contenido que puede darse al usuario que no esta autenticado-->
    @guest
        <p>Para tener mejor acceso a los contenidos <a href="/login">Inicia Sesion</a></p>
    @endguest
@endsection