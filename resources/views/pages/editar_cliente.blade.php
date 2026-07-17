@extends('layouts.master')
@section('title', 'Editar Cliente')

@section('content')
<div class="container mt-5 mb-5" style="min-height: 75vh;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{ route('clientes') }}" class="btn btn-link text-decoration-none link-secondary mb-3 p-0">
                <i class="bi bi-arrow-left-circle me-1"></i>Volver al listado de clientes
            </a>

            <div class="card border-0 shadow-sm rounded-3 overflow-hidden">
                <div class="p-4 text-white" style="background: linear-gradient(135deg, #2c3e50 0%, #1a252f 100%);">
                    <h4 class="m-0 fw-bold"><i class="bi bi-person-gear me-2 text-info"></i>Editar Datos del Cliente #{{ $persona->nPerCodigo }}</h4>
                    <p class="m-0 small text-white-50 mt-1">Actualice los campos requeridos. El sistema validará los formatos automáticamente.</p>
                </div>
                
                <div class="card-body p-4 bg-light-subtle">
                    <form action="{{ route('personas.update', $persona->nPerCodigo) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        @include('partials.form', ['btnText' => 'Guardar Cambios', 'btnIcon' => 'bi-cloud-arrow-up-fill'])
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection