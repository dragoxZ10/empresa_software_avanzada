@extends('layouts.master')
@section('title', 'Contacto')

@section('content')
    <div class="hero-contact text-center rounded-3 p-5 mb-4">
        <h1 class="fw-bold">Ponte en Contacto</h1>
        <p class="lead mb-0">Comunícate con nosotros.</p> 
        <p class="lead mb-0">Estamos listos para ayudarte a materializar tus proyectos tecnológicos.</p>
    </div>

    <div class="container-fluid mb-5">
        <div class="row g-4">
            <div class="col-md-6">
                <div class="contact-info-box p-4 h-100 rounded-3 shadow-sm">
                    <h3 class="fw-bold mb-3 fs-4">Canales de Atención</h3>
                    <p class="text-muted mb-4">Si prefieres una comunicación directa o deseas agendar una consultoría especializada, puedes utilizar los siguientes medios:</p>
                    
                    <ul class="list-unstyled contact-list">
                        <li class="mb-3">
                            <span class="fs-4 me-2">📍</span> 
                            <strong>Dirección: </strong> Av. América Oeste, Trujillo, Perú
                        </li>
                        <li class="mb-3">
                            <span class="fs-4 me-2">✉️</span> 
                            <strong>Correo: </strong> ebertruiz700@ebertech.com
                        </li>
                        <li class="mb-3">
                            <span class="fs-4 me-2">📞</span> 
                            <strong>Teléfono: </strong> +51 941 695 744
                        </li>
                        <li class="mb-3">
                            <span class="fs-4 me-2">⏰</span> 
                            <strong>Horario: </strong> Lun - Vie: 8:00 AM - 6:00 PM
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6">
                <div class="contact-form-box p-4 h-100 rounded-3 shadow-sm">
                    <h3 class="fw-bold mb-3 fs-4">Envíanos un Mensaje</h3>
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
                            <strong>¡Excelente!</strong> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    {{-- Formulario configurado para Laravel --}}
                    <form action="{{ route('contacto') }}" method="post">
                        @csrf 
                        
                        <div class="mb-3">
                            <label class="form-label fw-semibold text-secondary">Nombre y Apellido</label>
                            <input type="text" name="nombre" class="form-control custom-input" placeholder="Tu nombre completo" value="{{ old('nombre') }}">
                            <small class="text-danger fw-bold">{{ $errors->first('nombre') }}</small>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label fw-semibold text-secondary">Correo Electrónico</label>
                            <input type="email" name="email" class="form-control custom-input" placeholder="ejemplo@correo.com" value="{{ old('email') }}">
                            <small class="text-danger fw-bold">{{ $errors->first('email') }}</small>
                        </div>
                        
                        {{-- Campo Asunto agregado para cumplir con la validación del backend --}}
                        <div class="mb-3">
                            <label class="form-label fw-semibold text-secondary">Asunto</label>
                            <input type="text" name="asunto" class="form-control custom-input" placeholder="Motivo de tu mensaje" value="{{ old('asunto') }}">
                            <small class="text-danger fw-bold">{{ $errors->first('asunto') }}</small>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold text-secondary">Mensaje</label>
                            <textarea name="mensaje" class="form-control custom-input" rows="4" placeholder="Escribe tu mensaje.">{{ old('mensaje') }}</textarea>
                            <small class="text-danger fw-bold">{{ $errors->first('mensaje') }}</small>
                        </div>
                        
                        <div class="d-grid">
                            {{-- Se cambió type="button" a type="submit" para enviar los datos --}}
                            <button type="submit" class="btn btn-primary btn-contact-submit fw-bold py-2 shadow-sm">Enviar Mensaje</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection