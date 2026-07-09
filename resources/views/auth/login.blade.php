@extends('layouts.master')

@section('title', 'Iniciar Sesión - ER Digital Ecosystems')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center align-items-center" style="min-height: 70vh;">
        <div class="col-md-5">
            <div class="card border-0 shadow-sm rounded-3">
                <div class="card-body p-5">
                    
                    <div class="text-center mb-4">
                        <span style="font-size: 30pt; color: #007bff;">&#9820;</span>
                        <h3 class="fw-bold mt-2" style="color: #333;">Bienvenido de Nuevo</h3>
                        <p class="text-muted small">Ingresa tus credenciales para acceder al panel administrativo</p>
                    </div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label text-secondary fw-semibold small">Correo Electrónico</label>
                            <input id="email" type="email" class="form-control form-control-lg bg-light border-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="nombre@empresa.com" style="font-size: 10.5pt; border-radius: 6px;">
                            
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <label for="password" class="form-label text-secondary fw-semibold small mb-0">Contraseña</label>
                            </div>
                            <input id="password" type="password" class="form-control form-control-lg bg-light border-0 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="••••••••" style="font-size: 10.5pt; border-radius: 6px;">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-4 form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-input-label text-muted small" for="remember">
                                Mantener sesión iniciada
                            </label>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg fw-bold shadow-sm border-0 py-2" style="background: linear-gradient(135deg, #007bff 0%, #0056b3 100%); border-radius: 6px; font-size: 11pt;">
                                Iniciar Sesión
                            </button>
                        </div>
                    </form>

                </div>
            </div>
            
            <div class="text-center mt-4">
                <p class="text-muted small">¿Problemas con tu cuenta? <a href="{{ route('contacto') }}" class="text-primary fw-semibold text-decoration-none">Contacta a Soporte Técnico</a></p>
            </div>
            
        </div>
    </div>
</div>
@endsection