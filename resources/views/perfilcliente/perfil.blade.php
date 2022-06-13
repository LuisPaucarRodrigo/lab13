@extends('home')
@section('contenido')
    <form action="/home/{{$perfil->_id}}/modify" enctype="multipart/form-data" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="{{$perfil->name}}" disabled aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Apellido</label>
            <input type="text" class="form-control" name="apellido" value="{{$perfil->apellido}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Telefono</label>
            <input type="number" class="form-control" name="telefono" value="{{$perfil->telefono}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Direccion</label>
            <input type="text" class="form-control" name="direccion" value="{{$perfil->direccion}}">
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>
        <button href="/home" class="btn btn-danger">Cancelar</button>
    </form>
@endsection
