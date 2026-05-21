@extends('layouts.master')

@section('content')
    <!-- Hero Section -->
    <div class="hero-clients rounded-3 p-5 mb-4 text-center">
        <h1> Nuestros Clientes</h1>
        <p class="lead mb-0">Empresas que confían en nosotros para sus soluciones digitales. 
        <p class="lead mb-0"> Conoce a nuestros clientes satisfechos.</p>
    </div>

    <div id="clients" class="text-center my-4 py-2">
        <h2 class="fw-bold">Empresas que Confían en Nosotros</h2>
    </div>

    <div class="container-fluid mb-5">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="client-card p-4 h-100 rounded-3 shadow-sm">
                    <div class="client-icon fs-1 mb-2">🏫</div>
                    <h3>Programa de Educación y Capacitación</h3>
                    <p class="text-muted">Empresa dedicada a la formación profesional. Desarrollamos su plataforma de ERP</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="client-card p-4 h-100 rounded-3 shadow-sm">
                    <div class="client-icon fs-1 mb-2">🏋️</div>
                    <h3>Gimansio New Boddy</h3>
                    <p class="text-muted">Centro de fitness. Desarrollamos su sistema de gestión de membresías y reservas.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="client-card p-4 h-100 rounded-3 shadow-sm">
                    <div class="client-icon fs-1 mb-2">🏥</div>
                    <h3>Hospital Central de Tingo María</h3>
                    <p class="text-muted">Institución de salud. Implementamos su sistema de gestión de unidades de sangre.</p>
                </div>
            </div>
        </div>
    </div>
@endsection