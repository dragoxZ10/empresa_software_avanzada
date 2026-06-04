<style>
    /* 1. Efecto Hover: Cambia de color al pasar el mouse encima */
    .navbar-nav .nav-item .nav-link:hover {
        color: #007bff !important; /* Cambia el texto a color Azul */
        background-color: #f1f1f1; /* Le da un fondito gris sutil para que resalte más */
        border-radius: 4px;
        transition: color 0.3s ease-in-out;
    }

    /* 2. Pestaña Activa: El color de la sección en la que te encuentras */
    .navbar-nav .nav-item.active .nav-link {
        color: #d9534f !important; /* Se pinta de un color rojo/naranja */
        font-weight: bold;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}" style="color:#777">
            <span style="font-size:15pt">&#9820;</span> ER Digital Ecosytems
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @if( true || Auth::check() )
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ setActivo('home') }}">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item {{ setActivo('servicios') }}">
                        <a class="nav-link" href="{{ route('servicios') }}">Servicios</a>
                    </li>
                    <li class="nav-item {{ setActivo('proyectos') }}">
                        <a class="nav-link" href="{{ route('proyectos') }}">Proyectos</a>
                    </li>
                    <li class="nav-item {{ setActivo('clientes') }}">
                        <a class="nav-link" href="{{ route('clientes') }}">Clientes</a>
                    </li>
                    <li class="nav-item {{ setActivo('blog') }}">
                        <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                    </li>
                    <li class="nav-item {{ setActivo('contacto') }}">
                        <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
                    </li>
                </ul>

                <ul class="navbar-nav navbar-right">
                    <li class="nav-item">
                        <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                                Cerrar sesión
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        @endif
    </div>
</nav>