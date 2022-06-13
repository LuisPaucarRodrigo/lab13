@extends('layouts.registrarpro')
@section('alerta')

    <br>
    <br>
    <div class="card text-center">
        <div class="card-body">
            <h5 class="card-title">Opcion Invalida</h5>
            <p class="card-text">No puede eliminar esta categoria porque existen elementos que pertenecen
                a esta por lo cual le recomendamos eliminar los productos que pertenecen a este o cambiarlos de categoria </p>
            <a href="/categorias" class="btn btn-danger">Regresar a la tabla</a>
        </div>
        <div class="card-footer text-muted">
            <br>
        </div>
    </div>

@endsection
