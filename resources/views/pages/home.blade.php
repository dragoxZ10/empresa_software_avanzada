@extends('layouts.master')

@section('content')
    <div class="hero-section text-center rounded-3 p-5 mb-4">
        <h1>Bienvenido a Nuestra Empresa ER Digital Ecosytems</h1>
        <p class="lead mb-0">Somos una empresa innovadora comprometida con la excelencia. 
            <p class="lead mb-0"> Descubre nuestras soluciones profesionales desarrolladas con tecnología de punta.</p>
        </p>
    </div>

    <div class="welcome-section p-4 mb-4 rounded-3">
        <h2>Acerca de Nosotros</h2>
        <p class="mb-0 text-muted">
            Nuestros proyectos han sido cuidadosamente desarrollados utilizando <strong>Laravel</strong>, un framework moderno y robusto. 
            Con un enfoque centrado en el usuario, garantizamos experiencias digitales excepcionales.
        </p>
    </div>

    <div id="features" class="text-center my-4 py-2">
        <h2 class="fw-bold">Nuestras Características Principales</h2>
    </div>

    <div class="container-fluid mb-5">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-card card-verde p-4 h-100 rounded-3 shadow-sm">
                    <div class="feature-icon fs-1 mb-2">⚡</div>
                    <h3>Rendimiento</h3>
                    <p class="text-muted">Optimizado para máxima velocidad y eficiencia. Garantizamos tiempos de respuesta rápidos y una experiencia fluida.</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="feature-card card-azul p-4 h-100 rounded-3 shadow-sm">
                    <div class="feature-icon fs-1 mb-2">🔒</div>
                    <h3>Seguridad</h3>
                    <p class="text-muted">Implementamos los más altos estándares de seguridad. Protegemos tus datos con encriptación de nivel empresarial.</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="feature-card card-rosa p-4 h-100 rounded-3 shadow-sm">
                    <div class="feature-icon fs-1 mb-2">📱</div>
                    <h3>Responsivo</h3>
                    <p class="text-muted">Diseño completamente responsive. Se adapta perfectamente a cualquier dispositivo, desde móviles hasta escritorio.</p>
                </div>
            </div>
        </div>
    </div>
@endsection