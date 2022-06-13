@extends('layouts.registrarpro')
@section('contenido')
    <h1>Nuevo Producto</h1>
    <form action="/categorias/insert" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="descripcion">
        </div>
        <button type="submit" class="btn btn-primary">Añadir</button>
        <a href="/categorias" class="btn btn-danger">Cancelar</a>
    </form>
@endsection

