<div class="row g-3">
    <div class="col-md-12">
        <div class="form-group mb-3">
            <label for="nombre" class="form-label fw-bold">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $product?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-3">
            <label for="material" class="form-label fw-bold">{{ __('Material') }}</label>
            <input type="text" name="material" class="form-control @error('material') is-invalid @enderror" value="{{ old('material', $product?->material) }}" id="material" placeholder="Material">
            {!! $errors->first('material', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="precio" class="form-label fw-bold">{{ __('Precio') }}</label>
                    <input type="number" step="0.01" name="precio" class="form-control @error('precio') is-invalid @enderror" value="{{ old('precio', $product?->precio) }}" id="precio" placeholder="Precio">
                    {!! $errors->first('precio', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="stock" class="form-label fw-bold">{{ __('Stock') }}</label>
                    <input type="number" name="stock" class="form-control @error('stock') is-invalid @enderror" value="{{ old('stock', $product?->stock) }}" id="stock" placeholder="Stock">
                    {!! $errors->first('stock', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
                </div>
            </div>
        </div>

        <div class="form-group mb-3">
    <label for="imagen" class="form-label fw-bold">{{ __('Imagen') }}</label>
    
    <!-- Input para subir imagen -->
    <input type="file" name="imagen" class="form-control @error('imagen') is-invalid @enderror" id="imagen" accept="image/*" onchange="previewImage(event)">
    {!! $errors->first('imagen', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}

    <!-- Mostrar imagen actual si existe -->
    @if($product?->imagen && file_exists(public_path('storage/' . $product->imagen)))
        <img id="imagen-preview" src="{{ asset('storage/' . $product->imagen) }}" alt="{{ $product->nombre }}" class="mt-2 img-thumbnail" style="max-width: 150px;">
    @else
        <img id="imagen-preview" class="mt-2 d-none img-thumbnail" style="max-width: 150px;">
    @endif
</div>

<script>
function previewImage(event) {
    const reader = new FileReader();
    reader.onload = function () {
        const img = document.getElementById('imagen-preview');
        img.src = reader.result;
        img.classList.remove('d-none');
    };
    reader.readAsDataURL(event.target.files[0]);
}
</script>


        <div class="form-group mb-3">
            <label for="descripcion" class="form-label fw-bold">{{ __('Descripción') }}</label>
            <textarea name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" id="descripcion" rows="3" placeholder="Descripción">{{ old('descripcion', $product?->descripcion) }}</textarea>
            {!! $errors->first('descripcion', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-3">
            <label for="estado" class="form-label fw-bold">{{ __('Estado') }}</label>
            <select name="estado" class="form-select @error('estado') is-invalid @enderror">
                <option value="Activo" {{ old('estado', $product?->estado) == 'Disponible' ? 'selected' : '' }}>Activo</option>
                <option value="Agotado" {{ old('estado', $product?->estado) == 'Agotado' ? 'selected' : '' }}>Agotado</option>
            </select>
            {!! $errors->first('estado', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
        </div>
    </div>

    <div class="col-md-12 text-center">
        <button type="submit" class="btn btn-primary px-4 py-2 fw-bold">{{ __('Submit') }}</button>
    </div>
</div>


