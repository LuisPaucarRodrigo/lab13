@extends('home')
@section('contenido')
    <div class="row row-cols-1 row-cols-md-3 g-4" >
        @foreach($producto as $productos)
            <div class="card" style="width: 33%;">
                <a href="home/{{$productos->_id}}/detalleproductos"><img src="{{$productos->imagen}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title">{{$productos->nombre}}</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">precio : {{$productos->precio}}</li>
                </ul>
                <div class="card-body">
                    <a href="" class="btn btn-info">Añadir carrito</a>
                    <a href="/home/{{$productos->_id}}/carrito" class="btn btn-info">Comprar</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
