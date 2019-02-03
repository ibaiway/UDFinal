@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form action="{{route('user.update',$user->id)}}" method="post">
                      @method('put')
                      @csrf
                      <p> Nombre: <input type="text" name="name"> </p>
                      <input type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
