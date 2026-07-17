<div class="row g-3">
    <div class="col-md-6">
        <label class="form-label text-muted small fw-bold">Nombres Completos</label>
        <input type="text" name="cPerNombre" class="form-control rounded-3 @error('cPerNombre') is-invalid @enderror" value="{{ old('cPerNombre', $persona->cPerNombre ?? '') }}" autofocus>
        @error('cPerNombre') <div class="invalid-feedback fw-semibold">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-6">
        <label class="form-label text-muted small fw-bold">Apellidos Completos</label>
        <input type="text" name="cPerApellido" class="form-control rounded-3 @error('cPerApellido') is-invalid @enderror" value="{{ old('cPerApellido', $persona->cPerApellido ?? '') }}">
        @error('cPerApellido') <div class="invalid-feedback fw-semibold">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-8">
        <label class="form-label text-muted small fw-bold">Dirección de Domicilio / Oficina</label>
        <input type="text" name="cPerDireccion" class="form-control rounded-3 @error('cPerDireccion') is-invalid @enderror" value="{{ old('cPerDireccion', $persona->cPerDireccion ?? '') }}">
        @error('cPerDireccion') <div class="invalid-feedback fw-semibold">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-4">
        <label class="form-label text-muted small fw-bold">Sueldo / Crédito (S/.)</label>
        <input type="number" step="0.01" name="nPerSueldo" class="form-control rounded-3 @error('nPerSueldo') is-invalid @enderror" value="{{ old('nPerSueldo', $persona->nPerSueldo ?? '') }}" min="0">
        @error('nPerSueldo') <div class="invalid-feedback fw-semibold">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-4">
        <label class="form-label text-muted small fw-bold">Edad Registrada</label>
        <input type="number" name="nPerEdad" class="form-control rounded-3 @error('nPerEdad') is-invalid @enderror" value="{{ old('nPerEdad', $persona->nPerEdad ?? '') }}" min="0">
        @error('nPerEdad') <div class="invalid-feedback fw-semibold">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-4">
        <label class="form-label text-muted small fw-bold">Fecha de Nacimiento</label>
        <input type="date" name="dPerFecNac" class="form-control rounded-3 @error('dPerFecNac') is-invalid @enderror" value="{{ old('dPerFecNac', $persona->dPerFecNac ?? '') }}">
        @error('dPerFecNac') <div class="invalid-feedback fw-semibold">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-4">
        <label class="form-label text-muted small fw-bold">Imagen de Perfil</label>
        <input type="file" name="image" class="form-control rounded-3 @error('image') is-invalid @enderror" accept="image/jpeg, image/png, image/jpg">
        @error('image') <div class="invalid-feedback fw-semibold">{{ $message }}</div> @enderror
    </div>

    @if(isset($persona) && $persona->nPerCodigo)
    <div class="col-md-12">
        <label class="form-label text-muted small fw-bold">Estado</label>
        <select name="nPerEstado" class="form-select rounded-3 @error('nPerEstado') is-invalid @enderror">
            <option value="1" {{ old('nPerEstado', $persona->nPerEstado) == '1' ? 'selected' : '' }}>Activo</option>
            <option value="0" {{ old('nPerEstado', $persona->nPerEstado) == '0' ? 'selected' : '' }}>Inactivo</option>
        </select>
        @error('nPerEstado') <div class="invalid-feedback fw-semibold">{{ $message }}</div> @enderror
    </div>
    @endif
</div>

<div class="mt-4 pt-3 border-top text-end">
    <button type="submit" class="btn btn-dark px-4 py-2 rounded-pill shadow-sm">
        <i class="bi {{ $btnIcon ?? 'bi-save' }} me-1"></i> {{ $btnText ?? 'Guardar' }}
    </button>
</div>