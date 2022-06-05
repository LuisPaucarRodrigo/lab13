@extends('layouts.admin');
@section('contenido');
    ADMIN
<br>
<a href="admin/create"><button type="button" class="btn btn-success">Registrar</button></a>
<table class="table table-dark table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Usuarios</th>
        <th scope="col">Password</th>
    </tr>
    </thead>
    <tbody>
    @foreach($admins as $admin)
        <tr>
            <th scope="row">1</th>
            <td>{{$admin->usuario}}</td>
            <td>{{$admin->password}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection
