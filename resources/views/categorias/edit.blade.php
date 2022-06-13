
@extends('layouts.registrarpro')
@section('contenido')
    <h1>Editar Categoria</h1>
    <form action="/categorias/update/{{$categorias->_id}}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="{{$categorias->nombre}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="descripcion" value="{{$categorias->descripcion}}">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="/categorias" class="btn btn-danger">Cancelar</a>
    </form>
@endsection
