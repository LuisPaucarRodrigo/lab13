@extends('home')
@section('contenido')
    <!--/* <div class="row row-cols-1 row-cols-md-3 g-4" >
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
                    <a href="/home/{{$productos->_id}}/añadircarrito" class="btn btn-info">Añadir carrito</a>
                    <a href="/home/{{$productos->_id}}/carrito" class="btn btn-info">Comprar</a>
                </div>
            </div>
        @endforeach
    </div> */-->
    <div class="container">

        <div class="card">
            <img src="img/img1.jpg">
            <h4>Naturaleza</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
            <a href="#">Leer más</a>
        </div>

        <div class="card">
            <img src="img/img2.jpg">
            <h4>Comida</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
            <a href="#">Leer más</a>
        </div>

        <div class="card">
            <img src="img/img3.jpg">
            <h4>Tecnología</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
            <a href="#">Leer más</a>
        </div>

        <div class="card">
            <img src="img/img3.jpg">
            <h4>Tecnología</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
            <a href="#">Leer más</a>
        </div>

        <div class="card">
            <img src="img/img3.jpg">
            <h4>Tecnología</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
            <a href="#">Leer más</a>
        </div>

    </div>
@endsection
