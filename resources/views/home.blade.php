@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                @yield('contenido');
            </div>
        </div>
    </div>
</div>
<div>
    <footer class="footer-container">
        <div class="footer">
            <div class="footer-heading footer-1">
                <h2>Quienes Somos</h2>
                <a href="#">Blog</a>
                <a href="#">Demo</a>
                <a href="#">Artistas</a>
                <a href="#">Terminos de Condicion</a>
            </div>
            <div class="footer-heading footer-2">
                <h2>Contactenos</h2>
                <a href="#">Trabajos</a>
                <a href="#">Soportes</a>
                <a href="#">Patrocinadores</a>
            </div>
            <div class="footer-heading footer-3">
                <h2>Redes Sociales</h2>
                <a href="#">Instagram</a>
                <a href="#">DevianArt</a>
                <a href="#">Twitter</a>
                <a href="#">Youtube</a>
            </div>
            <div class="footer-email-form">
                <h2>Inicie su nueva Galliry</h2>
                <form action="Envio de datos">
                    <input type="email" placeholder="Entra tu Correo Personal" required id="footer-email" >
                    <input type="submit"  value="Acceder"id="footer-email-btn">
                </form>
            </div>
        </div>
    </footer>
</div>
@endsection
