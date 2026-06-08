@extends('layouts.master')
@section('title', 'Clientes') 

@section('content')
<div class="container mt-4">

    <div class="hero-clients rounded-3 p-5 mb-4 text-center">
        <h1>Nuestros Clientes</h1>
        <p class="lead mb-0">Empresas que confían en nosotros para sus soluciones digitales.</p> 
        <p class="lead mb-0">Conoce a nuestros clientes satisfechos.</p>
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
                    <p class="text-muted">Empresa dedicada a la formación profesional. Desarrollamos su plataforma de ERP.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="client-card p-4 h-100 rounded-3 shadow-sm">
                    <div class="client-icon fs-1 mb-2">🏋️</div>
                    <h3>Gimnasio New Body</h3>
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

    <hr class="my-5" style="border-top: 2px dashed #bdc3c7;">

    <div class="p-4 mb-4 text-white rounded-3 shadow-sm" style="background: linear-gradient(135deg, #34495e 0%, #2c3e50 100%);">
        <h2 class="h4 fw-bold m-0"><i class="bi bi-server me-2"></i>Registro Interno de BD</h2>
        <p class="mt-2 mb-0 text-white-50">Control sincronizado mediante Laravel DB Query Builder.</p>
    </div>

    <div class="card border-0 shadow-sm rounded-3 overflow-hidden mb-5">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle m-0 text-center">
                    <thead class="text-white fw-bold" style="background-color: #5dade2;">
                        <tr>
                            <th class="p-3">Código</th>
                            <th class="p-3 text-start">Apellidos y Nombres</th>
                            <th class="p-3">Sexo</th>
                            <th class="p-3">Edad</th>
                            <th class="p-3">Sueldo Base</th>
                            <th class="p-3">Código RND</th>
                            <th class="p-3">Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($personas as $persona)
                            <tr>
                                <td class="fw-bold text-muted p-3">#{{ $persona->nPerCodigo }}</td>
                                <td class="text-start p-3">
                                    <div class="fw-bold text-dark">{{ $persona->cPerApellido }}</div>
                                    <small class="text-muted">{{ $persona->cPerNombre }}</small>
                                </td>
                                <td class="p-3">
                                    <span class="badge rounded-pill bg-light text-dark border px-3 py-2">
                                        {{ $persona->cPerSexo ?? 'No asignado' }}
                                    </span>
                                </td>
                                <td class="p-3">{{ $persona->edad ?? 'N/A' }} años</td>
                                <td class="p-3 fw-bold text-success">S/. {{ number_format($persona->nPerSueldo, 2) }}</td>
                                <td class="p-3"><code class="text-dark">{{ $persona->cPerRnd }}</code></td>
                                <td class="p-3">
                                    @if($persona->nPerEstado == '1')
                                        <span class="badge bg-success-subtle text-success px-3 py-2 rounded-3 border border-success">Activo</span>
                                    @else
                                        <span class="badge bg-danger-subtle text-danger px-3 py-2 rounded-3 border border-danger">Inactivo</span>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center p-5 text-muted">
                                    <i class="bi bi-database-exclamation display-4 d-block mb-3"></i>
                                    No se encontraron registros de personas en la base de datos.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection