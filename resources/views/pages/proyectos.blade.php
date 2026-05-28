@extends('layouts.master')
@section('title', 'Proyectos') @section('content')

@section('content')
    <div class="hero-projects text-center rounded-3 p-5 mb-4">
        <h1 class="fw-bold">Nuestros Proyectos</h1>
        <p class="lead mb-0">Explora nuestra cartera de proyectos exitosos. 
            <p> Casos reales que demuestran nuestra experiencia y compromiso con la excelencia. </p>
                </p>
    </div>

    <div id="projects" class="text-center my-4 py-2">
        <h2 class="fw-bold">Proyectos Destacados</h2>
    </div>

    <div class="container-fluid mb-5">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="project-card p-4 h-100 rounded-3 shadow-sm">
                    <div class="fs-1 mb-2">🏢</div>
                    <h3 class="fs-5">Sistema ERP Empresarial</h3>
                    <p class="text-muted mb-0">Implementamos un ERP completo para gestión de recursos empresariales. Mejoró la eficiencia operativa en un 40%.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="project-card p-4 h-100 rounded-3 shadow-sm">
                    <div class="fs-1 mb-2">📱</div>
                    <h3 class="fs-5">App Móvil Fitness</h3>
                    <p class="text-muted mb-0">Aplicación mobile para seguimiento de entrenamiento. 50,000+ descargas en su primer mes.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="project-card p-4 h-100 rounded-3 shadow-sm">
                    <div class="fs-1 mb-2">🏥</div>
                    <h3 class="fs-5">Sistema Hospitalario</h3>
                    <p class="text-muted mb-0">Plataforma integral para gestión hospitalaria y registros de pacientes. Implementado en 5 hospitales.</p>
                </div>
            </div>
        </div>
    </div>
@endsection