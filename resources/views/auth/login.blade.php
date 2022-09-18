@extends('layouts.auth')

@section('content')
    <form action="/login" method="post">
        @csrf
        <h1>Login</h1>
        @include('layouts.partials.mensajes')
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Ingrese su usuario</label>
          <input type="text" class="form-control"  name="username" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Ingrese su contraseña</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <a href="/registro">Crea tu cuenta!</a>
        </div>
        <button type="submit" class="btn btn-primary" value="Login">Iniciar Sesion</button>
      </form>
@endsection