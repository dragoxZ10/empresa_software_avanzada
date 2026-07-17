@extends('layouts.master')
@section('title', 'Registrar Cliente')

@section('content')
<div class="container mt-5 mb-5" style="min-height: 75vh;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{ route('clientes') }}" class="btn btn-link text-decoration-none link-secondary mb-3 p-0">
                <i class="bi bi-arrow-left-circle me-1"></i>Volver al listado de clientes
            </a>

            <div class="card border-0 shadow-sm rounded-3 overflow-hidden">
                <div class="p-4 text-white" style="background: linear-gradient(135deg, #2c3e50 0%, #1a252f 100%);">
                    <h4 class="m-0 fw-bold"><i class="bi bi-person-fill-add me-2 text-info"></i>Alta de Nuevo Cliente</h4>
                    <p class="m-0 small text-white-50 mt-1">Complete los campos requeridos. El sistema validará los formatos automáticamente.</p>
                </div>
                
                <div class="card-body p-4 bg-light-subtle">
                    <form action="{{ route('clientes.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        @include('partials.form', ['btnText' => 'Guardar Cliente', 'btnIcon' => 'bi-cloud-check-fill'])
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection