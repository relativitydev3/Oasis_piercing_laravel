<div class="">
    <div class="col-md-12">
        <div class="form-group mb-3">
            <label for="nombre" class="form-label fw-bold">{{ __('Nombre') }}<span class="text-danger">*</span></label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $product?->nombre) }}" id="nombre" placeholder="Nombre" request>
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
                    <label for="precio" class="form-label fw-bold">{{ __('Precio') }}<span class="text-danger">*</span></label>
                    <input type="number" step="0.01" name="precio" class="form-control @error('precio') is-invalid @enderror" value="{{ old('precio', $product?->precio) }}" id="precio" placeholder="Precio" required>
                    {!! $errors->first('precio', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="stock" class="form-label fw-bold">{{ __('Stock') }}<span class="text-danger">*</span></label>
                    <input type="number" name="stock" class="form-control @error('stock') is-invalid @enderror" value="{{ old('stock', $product?->stock) }}" id="stock" placeholder="Stock" required>
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
                reader.onload = function() {
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
        <label for="">Estado<span class="text-danger">*</span></label>
        <select name="estado_id" class="form-control" required>
            @foreach($statuses as $status)
            <option value="{{ $status->id }}" {{ old('estado_id', $product->estado_id ?? '') == $status->id ? 'selected' : '' }}>
                {{ $status->name }}
            </option>
            @endforeach
        </select>

        {!! $errors->first('estado_id', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}

    </div>

    <div class="form-group mb-3">
        <label class="form-label fw-bold">{{ __('Categorías') }}<span class="text-danger">*</span></label>
        <div class="category-list p-2 border rounded">
            @foreach($categories as $category)
            <div class="category-item">
                <input type="checkbox" name="categories[]" value="{{ $category->id }}"
                    class="category-checkbox"
                    id="category_{{ $category->id }}"
                    {{ in_array($category->id, old('categories', $product->categories->pluck('id')->toArray() ?? [])) ? 'checked' : '' }}>
                <label class="category-label" for="category_{{ $category->id }}">
                    {{ $category->nombre }}
                </label>
            </div>
            @endforeach
        </div>
    </div>

    <style>
        .category-list {
            max-height: 200px;
            overflow-y: auto;
            background-color: transparent;
            /* Fondo transparente */
            padding-left: 10px;
        }

        .category-item {
            display: flex;
            align-items: center;
            margin-bottom: 8px;
        }

        .category-checkbox {
            display: inline-block;
            margin-right: 10px;
            width: 18px;
            height: 18px;
            cursor: pointer;
        }

        .category-label {
            cursor: pointer;
        }
    </style>


    <div class="form-group mb-3">
        <label for="material_id" class="form-label">Material</label>
        <select name="material_id" id="material_id" class="form-control @error('material_id') is-invalid @enderror">
            <option value="">Seleccione un material</option>
            @foreach($materials as $material)
            <option value="{{ $material->id }}" {{ old('material_id', $product->material_id ?? '') == $material->id ? 'selected' : '' }}>
                {{ $material->nombre }}
            </option>
            @endforeach
        </select>
        @error('material_id')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>



    <div class="col-md-12 text-center">
        <button type="submit" class="btn btn-primary px-4 py-2 fw-bold">{{ __('Submit') }}</button>
    </div>
</div>