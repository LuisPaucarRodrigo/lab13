@extends('home')
@section('contenido')
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{asset($producto->imagen)}}" class="card-img-top" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{$producto->nombre}}</h5>
                    <p class="card-text">{{$producto->descripcion}}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">stock :{{$producto->stock}}</li>
                    <li class="list-group-item">precio :{{$producto->precio}}</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="btn btn-info">Añadir carrito</a>
                    <a href="#" class="btn btn-info">Comprar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
