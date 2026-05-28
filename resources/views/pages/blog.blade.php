@extends('layouts.master')
@section('title', 'Blog') @section('content')

@section('content')
    <div class="text-center my-4 py-2">
        <h2 class="fw-bold">Blog de Noticias</h2>
    </div>

    <div class="container-fluid mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @isset($param)
                    <div class="blog-status blog-articulo p-4 rounded-3 shadow-sm text-center">
                        <span class="fs-1 mb-2 d-block">📰</span>
                        <h4 class="fw-bold mb-2">Artículo Seleccionado</h4>
                        <p class="mb-0 text-muted">Estás leyendo la publicación con el ID numérico: <strong class="text-dark fs-5">{{ $param }}</strong></p>
                    </div>
                @else
                    <div class="blog-status blog-general p-4 rounded-3 shadow-sm text-center">
                        <span class="fs-1 mb-2 d-block">✨</span>
                        <h4 class="fw-bold mb-2">Últimas Noticias</h4>
                        <p class="text-muted mb-3">Explora las novedades más recientes en tecnología y transformación digital.</p>
                        <div class="blog-tip p-3 rounded-3 mx-auto" style="max-width: 500px;">
                            <small class="text-secondary d-block">
                                💡 <strong>Tip del Ing. Yosip:</strong> Puedes enviar un parámetro numérico opcional en la URL (Ej: <code>/blog/15</code>) para cargar un artículo específico.
                            </small>
                        </div>
                    </div>
                @endisset
            </div>
        </div>
    </div>
@endsection