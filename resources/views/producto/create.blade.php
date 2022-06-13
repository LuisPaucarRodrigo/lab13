@extends('layouts.registrarpro');
@section('contenido')
    PRODUCTOS
    <form action="/producto/insert" enctype="multipart/form-data" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label class="form-label">Categoria</label>
            <select class="form-select" aria-label="Default select example" name="categoria_id">
                <option selected>Seleccione la categoria</option>
                @foreach($categorias as $categorias)
                    <option value="{{$categorias->_id}}">{{$categorias->nombre}}</option>
                @endforeach
            </select>
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
