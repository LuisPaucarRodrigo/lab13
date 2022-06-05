@extends('layouts.registrarpro');
@section('contenido')
    PRODUCTOS
    <a href="producto/create"><button type="button" class="btn btn-success">Registrar productos</button></a>
    <table class="table table-dark table-striped">
        <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Precio</th>
            <th scope="col">Stock</th>
            <th scope="col">Opciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($producto as $productos)
            <tr>
                <td>{{$productos->nombre}}</td>
                <td>{{$productos->descripcion}}</td>
                <td>{{$productos->precio}}</td>
                <td>{{$productos->stock}}</td>
                <td><a href="producto/{{$productos->_id}}/editar"><button type="button" class="btn btn-warning">Editar</button></a>
                    <a href="producto/{{$productos->_id}}/delete"><button type="button" class="btn btn-danger">Eliminar</button></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
