<div class="row g-3">
    <div class="col-md-12">
        <div class="form-group mb-3">
            <label for="nombre" class="form-label fw-bold">{{ __('Nombre') }}<span class="text-danger">*</span></label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $category?->nombre) }}" id="nombre" placeholder="Nombre" required>
            {!! $errors->first('nombre', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-3">
            <label for="descripcion" class="form-label fw-bold">{{ __('Descripción') }}</label>
            <textarea name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" id="descripcion" rows="3" placeholder="Descripción">{{ old('descripcion', $category?->descripcion) }}</textarea>
            {!! $errors->first('descripcion', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-3 ">
            <label for="estado" class="form-label fw-bold">{{ __('Estado') }}<span class="text-danger">*</span></label>
            <select style="background-color:#27293D;"  name="estado" class="form-control @error('estado') is-invalid @enderror" required>
                <option value="Activo" {{ old('estado', $category?->estado) == 'Activo' ? 'selected' : '' }}>Activo</option>
                <option value="Inactivo" {{ old('estado', $category?->estado) == 'Inactivo' ? 'selected' : '' }}>Inactivo</option>
            </select>
            {!! $errors->first('estado', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-3">
            <label for="imagen" class="form-label fw-bold">{{ __('Imagen') }}</label>

            <!-- Input para subir imagen -->
            <input type="file" name="imagen" class="form-control @error('imagen') is-invalid @enderror" id="imagen" accept="image/*" onchange="previewImage(event)">
            {!! $errors->first('imagen', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}

            <!-- Mostrar imagen actual si existe -->
            @if($category->imagen && file_exists(public_path('storage/' . $category->imagen)))
            <img id="imagen-preview" src="{{ asset('storage/' . $category->imagen) }}" alt="{{ $category->nombre }}" class="mt-2 img-thumbnail" style="max-width: 150px;">
            @else
            <img id="imagen-preview" class="mt-2 d-none img-thumbnail" style="max-width: 150px;">
            @endif
        </div>

        <script>
            function previewImage(event) {
                const reader = new FileReader();
                reader.onload = function() {
                    const img = document.getElementById('imagen-preview');
                    img.src = reader.result;
                    img.classList.remove('d-none');
                };
                reader.readAsDataURL(event.target.files[0]);
            }
        </script>

    </div>

    <div class="col-md-12 text-center">
        <button type="submit" class="btn btn-primary px-4 py-2 fw-bold">{{ __('Guardar Categoría') }}</button>
    </div>
</div>