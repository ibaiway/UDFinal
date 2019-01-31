@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <ul>
                      <li>USER ID: {{ $user->id }} </li>
                      <li>Nombre: {{ $user->name }} </li>
                      <li>Email: {{ $user->email }} </li>
                    </ul>                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
