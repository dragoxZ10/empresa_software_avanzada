@extends('layouts.master')
@section('title', 'Detalle del Cliente') 

@section('content')
<div class="container mt-5 mb-5 d-flex justify-content-center">
    
    {{-- ESTRUCTURA DE CARD DE BOOTSTRAP REQUERIDA EN LA PRÁCTICA --}}
    <div class="card shadow-lg border-0 rounded-4" style="width: 22rem; overflow: hidden;">
        
        {{-- Lógica de la imagen --}}
        @if($persona->image)
            <img src="{{ asset('storage/' . $persona->image) }}" class="card-img-top object-fit-cover" alt="Foto de {{ $persona->cPerNombre }}" style="height: 250px;">
        @else
            <div class="card-img-top bg-light d-flex align-items-center justify-content-center text-secondary" style="height: 250px;">
                <i class="bi bi-person-fill" style="font-size: 6rem;"></i>
            </div>
        @endif

        <div class="card-body p-4">
            <h5 class="card-title fw-bold text-dark mb-1">{{ $persona->cPerNombre }} {{ $persona->cPerApellido }}</h5>
            <p class="card-text text-muted small mb-4">Código RND: <span class="badge bg-secondary">{{ $persona->cPerRnd }}</span></p>
            
            <div class="mb-3">
                <div class="text-muted small fw-bold"><i class="bi bi-geo-alt-fill me-1"></i>Dirección</div>
                <div>{{ $persona->cPerDireccion ?? 'No registrada' }}</div>
            </div>

            <div class="d-flex justify-content-between mb-4">
                <div>
                    <div class="text-muted small fw-bold"><i class="bi bi-calendar-event me-1"></i>Edad</div>
                    <div>{{ $persona->nPerEdad ?? 'N/A' }} años</div>
                </div>
                <div class="text-end">
                    <div class="text-muted small fw-bold"><i class="bi bi-cash-stack me-1"></i>Sueldo/Crédito</div>
                    <div class="text-success fw-bold">S/. {{ number_format($persona->nPerSueldo, 2) }}</div>
                </div>
            </div>

            <div class="d-grid gap-2">
                <a href="{{ route('clientes') }}" class="btn btn-outline-dark rounded-pill">
                    <i class="bi bi-arrow-left me-1"></i> Volver a la lista
                </a>
            </div>
        </div>
    </div>

</div>
@endsection