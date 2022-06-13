@extends('layouts.registrarpro');
@section('contenido')
    PRODUCTOS
    <a href="producto/create"><button type="button" class="btn btn-success">Registrar productos</button></a>
    <table class="table table-dark table-striped">
        <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Categoria</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Precio</th>
            <th scope="col">Stock</th>
            <th scope="col">Opciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($productos as $producto)
            <tr>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->categorias->nombre}}</td>
                <td>{{$producto->descripcion}}</td>
                <td>{{$producto->precio}}</td>
                <td>{{$producto->stock}}</td>
                <td><a href="producto/{{$producto->_id}}/editar"><button type="button" class="btn btn-warning">Editar</button></a>
                    <a href="producto/{{$producto->_id}}/delete"><button type="button" class="btn btn-danger">Eliminar</button></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
