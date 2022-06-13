@extends('layouts.registrarpro')
@section('contenido')
    Categorias<br>
    <br>
    <a href="categorias/create" type="button" class="btn btn-success">Añadir Categoria</a>
    <hr>
    <table class="table table-dark table-striped">
        <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        @foreach($categorias as $categorias)
            <tbody>
            <tr>
                <td>{{$categorias->nombre}}</td>
                <td>{{$categorias->descripcion}}</td>
                <td><a href="categorias/{{$categorias->_id}}/edit" type="button" class="btn btn-warning">Editar</a>
                    <a href="categorias/delete/{{$categorias->_id}}" type="button" class="btn btn-danger">Eliminar</a></td>
            </tr>
        @endforeach
    </table>

    <a href="producto" type="button" class="btn btn-success">Productos</a>
    <a href="/home" target="_blank" type="button" class="btn btn-info">Vista Usuarios</a>

@endsection
