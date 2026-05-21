@extends('layouts.master')

@section('content')
    <div class="hero-section-services text-center rounded-3 p-5 mb-4">
        <h1>Nuestros Servicios</h1>
        <p class="lead mb-0">Ofrecemos soluciones integrales y personalizadas para impulsar tu negocio. Descubre cómo podemos ayudarte a alcanzar tus objetivos.</p>
    </div>

    <!-- Servicios -->
    <div id="services" class="text-center my-4 py-2">
        <h2 class="fw-bold">Nuestros Servicios Principales</h2>
    </div>

    <div class="container-fluid mb-5">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="service-card p-4 h-100 rounded-3 shadow-sm">
                    <div class="service-icon fs-1 mb-2">💻</div>
                    <h3>Desarrollo Web</h3>
                    <p class="text-muted">Creamos sitios web modernos y responsive utilizando tecnología de punta. Desde sitios informativos hasta aplicaciones complejas, nos adaptamos a tus necesidades.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="service-card p-4 h-100 rounded-3 shadow-sm">
                    <div class="service-icon fs-1 mb-2">🎨</div>
                    <h3>Diseño UX/UI</h3>
                    <p class="text-muted">Diseñamos interfaces intuitivas y atractivas que mejoran la experiencia del usuario. Nuestros diseños combinan estética con funcionalidad.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="service-card p-4 h-100 rounded-3 shadow-sm">
                    <div class="service-icon fs-1 mb-2">📱</div>
                    <h3>Aplicaciones Móviles</h3>
                    <p class="text-muted">Desarrollamos aplicaciones móviles nativas y multiplataforma que ofrecen excelente rendimiento y experiencia de usuario.</p>
                </div>
            </div>
        </div>
    </div>
@endsection