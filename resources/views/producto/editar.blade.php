@extends('layouts.registrarpro');
@section('contenido')
    EDITAR PRODUCTOS
    <form action="/producto/editar/{{$producto->_id}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" aria-describedby="emailHelp" value="{{$producto->nombre}}" >
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="descripcion" value="{{$producto->descripcion}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Stock</label>
            <input type="number" class="form-control" name="stock" value="{{$producto->stock}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Precio</label>
            <input type="number" class="form-control" name="precio" value="{{$producto->precio}}">
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>
@endsection
