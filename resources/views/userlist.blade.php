@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <table>
                      <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>email</th>
                      </tr>
                      @foreach ($users as $user)
                      <tr>
                        <td><a href="{{route('user.show',$user->id)}}">{{ $user->id }}</a></td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                      </tr>
                      @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
