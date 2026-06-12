@extends('layouts.master')
@section('title', 'Registrar Cliente')

@section('content')
<div class="container mt-5 mb-5" style="min-height: 75vh;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <a href="{{ route('clientes') }}" class="btn btn-link text-decoration-none link-secondary mb-3 p-0">
                <i class="bi bi-arrow-left-circle me-1"></i> <-- Volver al listado de clientes
            </a>

            <div class="card border-0 shadow-sm rounded-3 overflow-hidden">
                <div class="p-4 text-white" style="background: linear-gradient(135deg, #2c3e50 0%, #1a252f 100%);">
                    <h4 class="m-0 fw-bold"><i class="bi bi-person-fill-add me-2 text-info"></i>Alta de Nuevo Cliente</h4>
                    <p class="m-0 small text-white-50 mt-1">Complete los campos requeridos. El sistema validará los formatos automáticamente.</p>
                </div>
                
                <div class="card-body p-4 bg-light-subtle">
                    <form action="{{ route('clientes.store') }}" method="POST">
                        @csrf {{-- Token obligatorio de protección contra falsificación de peticiones --}}

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label text-muted small fw-bold">Nombres Completos</label>
                                <input type="text" name="cPerNombre" class="form-control rounded-3 @error('cPerNombre') is-invalid @enderror" value="{{ old('cPerNombre') }}" placeholder="Ej. Ebert Alejandro">
                                @error('cPerNombre') <div class="invalid-feedback fw-semibold">{{ $message }}</div> @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label text-muted small fw-bold">Apellidos Completos</label>
                                <input type="text" name="cPerApellido" class="form-control rounded-3 @error('cPerApellido') is-invalid @enderror" value="{{ old('cPerApellido') }}" placeholder="Ej. Ruiz Chimbor">
                                @error('cPerApellido') <div class="invalid-feedback fw-semibold">{{ $message }}</div> @enderror
                            </div>

                            <div class="col-12">
                                <label class="form-label text-muted small fw-bold">Dirección de Domicilio / Oficina</label>
                                <input type="text" name="cPerDireccion" class="form-control rounded-3 @error('cPerDireccion') is-invalid @enderror" value="{{ old('cPerDireccion') }}" placeholder="Ej. Av. Larco 450 - Trujillo">
                                @error('cPerDireccion') <div class="invalid-feedback fw-semibold">{{ $message }}</div> @enderror
                            </div>

                            <div class="col-md-4">
                                <label class="form-label text-muted small fw-bold">Fecha de Nacimiento</label>
                                <input type="date" name="dPerFecNac" class="form-control rounded-3 @error('dPerFecNac') is-invalid @enderror" value="{{ old('dPerFecNac') }}">
                                @error('dPerFecNac') <div class="invalid-feedback fw-semibold">{{ $message }}</div> @enderror
                            </div>

                            <div class="col-md-4">
                                <label class="form-label text-muted small fw-bold">Edad Registrada</label>
                                <input type="number" name="nPerEdad" class="form-control rounded-3 @error('nPerEdad') is-invalid @enderror" value="{{ old('nPerEdad') }}" placeholder="0" min="0">
                                @error('nPerEdad') <div class="invalid-feedback fw-semibold">{{ $message }}</div> @enderror
                            </div>

                            <div class="col-md-4">
                                <label class="form-label text-muted small fw-bold">Sueldo / Crédito (S/.)</label>
                                <input type="number" step="0.01" name="nPerSueldo" class="form-control rounded-3 @error('nPerSueldo') is-invalid @enderror" value="{{ old('nPerSueldo') }}" placeholder="0.00" min="0">
                                @error('nPerSueldo') <div class="invalid-feedback fw-semibold">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        <div class="mt-4 pt-3 border-top text-end">
                            <button type="submit" class="btn btn-dark px-4 py-2 rounded-pill shadow-sm">
                                <i class="bi bi-cloud-check-fill me-1"></i> Guardar Cliente
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection