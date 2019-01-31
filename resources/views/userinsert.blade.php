@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form action="{{route('user.store')}}" method="post">
                      @csrf
                      <p> Nombre: <input type="text" name="name"> </p>
                      <p> Email:  <input type="email" name="email"> </p>
                      <p> Contraseña: <input type="password" name="password"> </p>
                      <p> Repite Contraseña: <input type="password" name="rpassword"> </p>
                      <input type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
