@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form>
                      <p> Nombre: <input type="text"> </p>
                      <p> Email:  <input type="email"> </p>
                      <p> Contraseña: <input type="password"> </p>
                      <p> Repite Contraseña: <input type="password"> </p>
                      <input type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
