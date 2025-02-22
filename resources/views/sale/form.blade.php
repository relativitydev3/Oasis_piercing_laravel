<div class="row g-3">
    <!-- Sección Datos del Cliente -->
    <fieldset class="border p-3 rounded">
        <legend class="w-auto px-2">Datos del Cliente</legend>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nombre__cliente" class="form-label">Nombre Cliente</label>
                    <input type="text" name="Nombre_Cliente" class="form-control @error('Nombre_Cliente') is-invalid @enderror" value="{{ old('Nombre_Cliente', $sale?->Nombre_Cliente) }}" id="nombre__cliente" placeholder="Nombre Cliente">
                    {!! $errors->first('Nombre_Cliente', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="apellido__cliente" class="form-label">Apellido Cliente</label>
                    <input type="text" name="Apellido_Cliente" class="form-control @error('Apellido_Cliente') is-invalid @enderror" value="{{ old('Apellido_Cliente', $sale?->Apellido_Cliente) }}" id="apellido__cliente" placeholder="Apellido Cliente">
                    {!! $errors->first('Apellido_Cliente', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="direccion__cliente" class="form-label">Dirección Cliente</label>
                    <input type="text" name="Direccion_Cliente" class="form-control @error('Direccion_Cliente') is-invalid @enderror" value="{{ old('Direccion_Cliente', $sale?->Direccion_Cliente) }}" id="direccion__cliente" placeholder="Dirección Cliente">
                    {!! $errors->first('Direccion_Cliente', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="ciudad__cliente" class="form-label">Ciudad Cliente</label>
                    <input type="text" name="Ciudad_Cliente" class="form-control @error('Ciudad_Cliente') is-invalid @enderror" value="{{ old('Ciudad_Cliente', $sale?->Ciudad_Cliente) }}" id="ciudad__cliente" placeholder="Ciudad Cliente">
                    {!! $errors->first('Ciudad_Cliente', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="departamento__cliente" class="form-label">Departamento Cliente</label>
                    <input type="text" name="Departamento_Cliente" class="form-control @error('Departamento_Cliente') is-invalid @enderror" value="{{ old('Departamento_Cliente', $sale?->Departamento_Cliente) }}" id="departamento__cliente" placeholder="Departamento Cliente">
                    {!! $errors->first('Departamento_Cliente', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="telefono__cliente" class="form-label">Teléfono Cliente</label>
                    <input type="text" name="Telefono_Cliente" class="form-control @error('Telefono_Cliente') is-invalid @enderror" value="{{ old('Telefono_Cliente', $sale?->Telefono_Cliente) }}" id="telefono__cliente" placeholder="Teléfono Cliente">
                    {!! $errors->first('Telefono_Cliente', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="correo__cliente" class="form-label">Correo Cliente</label>
            <input type="email" name="Correo_Cliente" class="form-control @error('Correo_Cliente') is-invalid @enderror" value="{{ old('Correo_Cliente', $sale?->Correo_Cliente) }}" id="correo__cliente" placeholder="Correo Cliente">
            {!! $errors->first('Correo_Cliente', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
        </div>
    </fieldset>


    <!-- Sección Datos de la Venta -->
    <fieldset class="border p-3 rounded mt-3">
        <legend class="w-auto px-2">Datos de la Venta</legend>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="user_id" class="form-label">Usuario que realiza la venta</label>
                    <select name="user_id" class="form-control @error('user_id') is-invalid @enderror" id="user_id">
                        <option value="">Seleccione un usuario</option>
                        @foreach($users as $user)
                        <option value="{{ $user->id }}" {{ old('user_id', $sale?->user_id) == $user->id ? 'selected' : '' }}>
                            {{ $user->name }} {{ $user->last_name }}
                        </option>
                        @endforeach
                    </select>
                    {!! $errors->first('user_id', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="estado" class="form-label">Estado de la Venta</label>
                    <select name="estado" class="form-control @error('estado') is-invalid @enderror" id="estado">
                        <option value="pendiente" {{ old('estado', $sale?->estado) == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                        <option value="completada" {{ old('estado', $sale?->estado) == 'completada' ? 'selected' : '' }}>Completada</option>
                        <option value="cancelada" {{ old('estado', $sale?->estado) == 'cancelada' ? 'selected' : '' }}>Cancelada</option>
                    </select>
                    {!! $errors->first('estado', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
                </div>
            </div>
        </div>
    </fieldset>



    <div class="row g-3">
    <fieldset class="border p-3 rounded mt-3">
        <legend class="w-auto px-2">Seleccionar Productos</legend>

        <!-- Campo de búsqueda -->
        <div class="mb-3">
            <input type="text" id="searchInput" class="form-control" placeholder="Buscar productos...">
        </div>

        <div class="table-responsive" style="max-height: 300px; overflow-y: auto;">
            <table class="table" id="productTable">
                <thead>
                    <tr class="color-table">
                        <th>Seleccionar</th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    @php
                        $isSelected = array_key_exists($product->id, $saleDetails);
                        $cantidad = $isSelected ? $saleDetails[$product->id] : 1;
                        $subtotal = $isSelected ? $cantidad * $product->precio : 0;
                    @endphp
                    <tr class="color-table">
                        <td>
                            <input style="margin-left: 2em;" type="checkbox" class="form-check-input product-checkbox"
                                   name="productos[{{ $product->id }}][seleccionado]" value="1"
                                   {{ $isSelected ? 'checked' : '' }}>
                        </td>
                        <td>{{ $product->nombre }}</td>
                        <td>
                            <input type="number" name="productos[{{ $product->id }}][cantidad]"
                                   class="form-control product-quantity" min="1" value="{{ $cantidad }}"
                                   {{ $isSelected ? '' : 'disabled' }}>
                        </td>
                        <td class="product-price" data-price="{{ $product->precio }}">
                            {{ number_format($product->precio, 2) }}
                        </td>
                        <td class="product-subtotal">
                            {{ number_format($subtotal, 2) }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Total General -->
        <div class="text-end mt-3">
            <h4>Total General: <span id="totalGeneral">0.00</span></h4>
        </div>
    </fieldset>

    <div class="col-md-12 text-center mt-4">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Guardar Venta
        </button>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        function actualizarTotalGeneral() {
            let total = 0;
            document.querySelectorAll('.product-subtotal').forEach(function(subtotalCell) {
                total += parseFloat(subtotalCell.textContent);
            });
            document.getElementById('totalGeneral').textContent = total.toFixed(2);
        }

        function actualizarSubtotal(row) {
            var quantityInput = row.querySelector('.product-quantity');
            var price = parseFloat(row.querySelector('.product-price').dataset.price);
            var subtotalCell = row.querySelector('.product-subtotal');
            var quantity = parseInt(quantityInput.value) || 1;

            if (row.querySelector('.product-checkbox').checked) {
                subtotalCell.textContent = (quantity * price).toFixed(2);
            } else {
                subtotalCell.textContent = "0.00";
            }

            actualizarTotalGeneral();
        }

        // Aplicar los cálculos a los productos ya seleccionados
        document.querySelectorAll('.product-checkbox').forEach(function(checkbox) {
            var row = checkbox.closest('tr');
            if (checkbox.checked) {
                row.querySelector('.product-quantity').disabled = false;
            }
            actualizarSubtotal(row);

            checkbox.addEventListener('change', function() {
                var quantityInput = row.querySelector('.product-quantity');
                quantityInput.disabled = !this.checked;
                actualizarSubtotal(row);
            });
        });

        // Actualizar subtotal cuando cambia la cantidad
        document.querySelectorAll('.product-quantity').forEach(function(input) {
            input.addEventListener('input', function() {
                actualizarSubtotal(this.closest('tr'));
            });
        });

        // Filtro de búsqueda en la tabla
        document.getElementById('searchInput').addEventListener('keyup', function() {
            var searchValue = this.value.toLowerCase();
            document.querySelectorAll('#productTable tbody tr').forEach(function(row) {
                var productName = row.cells[1].textContent.toLowerCase();
                row.style.display = productName.includes(searchValue) ? '' : 'none';
            });
        });

        // Calcular total al cargar la página
        actualizarTotalGeneral();
    });
</script>


</div>