@extends('layouts.auth')

@section('content')
    <form class="row g-3" action="/registro" method="POST">
        @csrf
        <h1>Crear Cuenta</h1>
        @include('layouts.partials.mensajes')
        <div class="form-floating mb-3">
            <input type="text" name="name" placeholder="Ingresa un nombre" class="form-control" id="validationDefault01" value="Mark" required>
            <label for="validationDefault01" class="form-label">Nombre Completo</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="username" placeholder="Ingresa un username" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
          <label for="validationDefaultUsername" class="form-label">Username</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" name="email" placeholder="Ingresa tu correo" class="form-control" id="validationDefault03" required>
          <label for="validationDefault03" class="form-label">Correo</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" name="password" placeholder="Ingresa tu contraseña" class="form-control" id="validationDefault04" required>
          <label for="validationDefault04" class="form-label">Contraseña</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" name="password_confirmation" placeholder="Valida tu contraseña" class="form-control" id="validationDefault05" required>
          <label for="validationDefault05" class="form-label">Confirma tu Contraseña</label>
        </div>
        <div class="col-12">
          <button class="btn btn-success" type="submit" value="Registro">Aceptar</button>
        </div>
      </form>
@endsection