<nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}" style="color: white; font-weight: 700; font-size: 1.3rem;">
            <span style="font-size:15pt">&#9820;</span> ER Digital Ecosytems
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border-color: rgba(255, 255, 255, 0.5);">
            <span class="navbar-toggler-icon" style="filter: brightness(0) invert(1);"></span>
        </button>

        @if( true || Auth::check() )
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    
                    <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/') }}" style="color: white; font-weight: 500;">Home</a>
                    </li>
                    
                    <li class="nav-item {{ Request::is('servicios*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/servicios') }}" style="color: white; font-weight: 500;">Servicios</a>
                    </li>
                    
                    <li class="nav-item {{ Request::is('proyectos*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/proyectos') }}" style="color: white; font-weight: 500;">Proyectos</a>
                    </li>
                    
                    <li class="nav-item {{ Request::is('clientes*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/clientes') }}" style="color: white; font-weight: 500;">Clientes</a>
                    </li>
                    
                    <li class="nav-item {{ Request::is('blog*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/blog') }}" style="color: white; font-weight: 500;">Blog</a>
                    </li>
                    
                    <li class="nav-item {{ Request::is('contacto') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/contacto') }}" style="color: white; font-weight: 500;">Contacto</a>
                    </li>

                </ul>

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-link nav-link" style="display:inline; cursor:pointer; text-decoration:none; color: white; font-weight: 500;">
                                Cerrar sesión
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        @endif
    </div>
</nav>