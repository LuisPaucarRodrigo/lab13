@extends('layouts.registrarpro');
@section('contenido')
    PRODUCTOS
    <form action="/producto/insert" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="descripcion">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Stock</label>
            <input type="number" class="form-control" name="stock">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Precio</label>
            <input type="number" class="form-control" name="precio">
        </div>
        <div class="mb-3">
            <label for="formFileSm" class="form-label">Imagen</label>
            <input class="form-control form-control-sm" id="formFileSm" type="file" name="imagen">
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
@endsection
