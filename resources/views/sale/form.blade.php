<div class="">
    <!-- Sección Datos del Cliente -->
    <fieldset class="border p-3 rounded">
        <legend class="w-auto px-2 text-light">Datos del Cliente</legend>

        <!-- Fila 1: Nombre y Apellido -->
        <div class="row">
            <!-- Nombre Cliente -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nombre__cliente" class="form-label">Nombre Cliente<span class="text-danger">*</span></label>
                    <input style="background-color:#27293D;" type="text" name="Nombre_Cliente"
                        class="form-control @error('Nombre_Cliente') is-invalid @enderror"
                        value="{{ old('Nombre_Cliente', $sale?->Nombre_Cliente) }}"
                        id="nombre__cliente" placeholder="Nombre Cliente" required>
                    {!! $errors->first('Nombre_Cliente', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
                </div>
            </div>
            <!-- Apellido Cliente -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="apellido__cliente" class="form-label">Apellido Cliente</label>
                    <input type="text" name="Apellido_Cliente"
                        class="form-control @error('Apellido_Cliente') is-invalid @enderror"
                        value="{{ old('Apellido_Cliente', $sale?->Apellido_Cliente) }}"
                        id="apellido__cliente" placeholder="Apellido Cliente">
                    {!! $errors->first('Apellido_Cliente', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
                </div>
            </div>
        </div>

        <!-- Fila 2: Documento y Método de Pago -->
        <div class="row">
            <!-- Documento del Cliente -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="Documento_Cliente" class="form-label">Documento del Cliente</label>
                    <input type="number" name="Documento_Cliente"
                        class="form-control @error('Documento_Cliente') is-invalid @enderror"
                        value="{{ old('Documento_Cliente', $sale?->Documento_Cliente) }}"
                        id="Documento_Cliente" placeholder="Documento Cliente">
                    {!! $errors->first('Documento_Cliente', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
                </div>
            </div>
            <!-- Método de Pago -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="Metodo_pago" class="form-label">Método de Pago<span class="text-danger">*</span></label>
                    <select style="background-color: #27293D;" name="Metodo_pago"
                        class="form-control @error('Metodo_pago') is-invalid @enderror"
                        id="Metodo_pago" required>
                        <option value="">Seleccione un método</option>
                        <option value="Contra entrega" {{ old('Metodo_pago', $sale->Metodo_pago ?? '') == 'Contra entrega' ? 'selected' : '' }}>Contra entrega</option>
                        <option value="Online" {{ old('Metodo_pago', $sale->Metodo_pago ?? '') == 'Online' ? 'selected' : '' }}>Online</option>
                        <option value="Efectivo" {{ old('Metodo_pago', $sale->Metodo_pago ?? '') == 'Efectivo' ? 'selected' : '' }}>Efectivo</option>
                    </select>
                    {!! $errors->first('Metodo_pago', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
                </div>
            </div>
        </div>

        <!-- Fila 3: Dirección y Teléfono -->
        <div class="row">
            <!-- Dirección Cliente -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="direccion__cliente" class="form-label">Dirección Cliente<span class="text-danger">*</span></label>
                    <input type="text" name="Direccion_Cliente"
                        class="form-control @error('Direccion_Cliente') is-invalid @enderror"
                        value="{{ old('Direccion_Cliente', $sale?->Direccion_Cliente) }}"
                        id="direccion__cliente" placeholder="Dirección Cliente" required>
                    {!! $errors->first('Direccion_Cliente', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
                </div>
            </div>
            <!-- Teléfono Cliente -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="telefono__cliente" class="form-label">Teléfono Cliente</label>
                    <input type="text" name="Telefono_Cliente"
                        class="form-control @error('Telefono_Cliente') is-invalid @enderror"
                        value="{{ old('Telefono_Cliente', $sale?->Telefono_Cliente) }}"
                        id="telefono__cliente" placeholder="Teléfono Cliente">
                    {!! $errors->first('Telefono_Cliente', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
                </div>
            </div>
        </div>

        <!-- Fila 4: Ciudad y Departamento -->
        <div class="row">
            <!-- Ciudad Cliente con datalist -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="ciudad__cliente" class="form-label">Ciudad Cliente</label>
                    <input list="ciudadesList" name="Ciudad_Cliente"
                        class="form-control @error('Ciudad_Cliente') is-invalid @enderror"
                        id="ciudad__cliente" placeholder="Seleccione una ciudad"
                        value="{{ old('Ciudad_Cliente', $sale?->Ciudad_Cliente) }}">
                    <datalist id="ciudadesList">
                        @php
                        $ciudades = [
                        'Bogotá', 'Medellín', 'Cali', 'Barranquilla', 'Cartagena', 'Cúcuta', 'Bucaramanga',
                        'Pereira', 'Santa Marta', 'Ibagué', 'Soledad', 'Pasto', 'Manizales', 'Montería',
                        'Villavicencio', 'Neiva', 'Armenia', 'Popayán', 'Sincelejo', 'Valledupar'
                        ];
                        @endphp
                        @foreach($ciudades as $ciudad)
                        <option value="{{ $ciudad }}"></option>
                        @endforeach
                    </datalist>
                    {!! $errors->first('Ciudad_Cliente', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
                </div>
            </div>
            <!-- Departamento Cliente con datalist -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="Departamento_Cliente" class="form-label">Departamento Cliente</label>
                    <input list="departamentosList" name="Departamento_Cliente"
                        class="form-control @error('Departamento_Cliente') is-invalid @enderror"
                        id="Departamento_Cliente" placeholder="Seleccione un departamento"
                        value="{{ old('Departamento_Cliente', $sale?->Departamento_Cliente) }}">
                    <datalist id="departamentosList">
                        @php
                        $departamentos = [
                        'Amazonas', 'Antioquia', 'Arauca', 'Atlántico', 'Bolívar', 'Boyacá', 'Caldas', 'Caquetá',
                        'Casanare', 'Cauca', 'Cesar', 'Chocó', 'Córdoba', 'Cundinamarca', 'Guainía', 'Guaviare',
                        'Huila', 'La Guajira', 'Magdalena', 'Meta', 'Nariño', 'Norte de Santander', 'Putumayo',
                        'Quindío', 'Risaralda', 'San Andrés y Providencia', 'Santander', 'Sucre', 'Tolima',
                        'Valle del Cauca', 'Vaupés', 'Vichada'
                        ];
                        @endphp
                        @foreach($departamentos as $departamento)
                        <option value="{{ $departamento }}"></option>
                        @endforeach
                    </datalist>
                    {!! $errors->first('Departamento_Cliente', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
                </div>
            </div>
        </div>

        <!-- Fila 5: Barrio y Correo -->
        <div class="row">
            <!-- Barrio Cliente con datalist -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="barrio__cliente" class="form-label">Barrio Cliente</label>
                    <input list="barriosList" name="Barrio_Cliente"
                        class="form-control @error('Barrio_Cliente') is-invalid @enderror"
                        id="barrio__cliente" placeholder="Seleccione un barrio"
                        value="{{ old('Barrio_Cliente', $sale?->Barrio_Cliente) }}">
                    <datalist id="barriosList">
                        @php
                        $barrios = [
                        // Bogotá
                        'Chapinero', 'Usaquén', 'Suba', 'Teusaquillo', 'Kennedy', 'Engativá', 'Fontibón',
                        'Santa Fe', 'La Candelaria', 'San Cristóbal', 'Antonio Nariño', 'Barrios Unidos',
                        'Bosa', 'Ciudad Bolívar', 'Los Mártires', 'Puente Aranda', 'Rafael Uribe Uribe',
                        'Tunjuelito', 'Usme', 'Cedritos', 'Chicó', 'El Recreo', 'Ciudad Salitre',
                        'Modelia', 'Normandía', 'Ciudad Montes', 'Santa Barbara', 'Niza', 'Colina Campestre',
                        'Contador', 'La Castellana', 'Los Cedros', 'Mazurén', 'Multicentro', 'Pasadena',
                        'Pontevedra', 'Prado Veraniego', 'Quinta Camacho', 'Rosales', 'Santa Ana',
                        'Salitre Greco', 'Timiza', 'Toberin', 'Venecia', 'Castilla', 'El Tintal',

                        // Medellín
                        'El Poblado', 'Laureles', 'Belén', 'Envigado', 'La América', 'Robledo',
                        'Buenos Aires', 'La Candelaria', 'Villa Hermosa', 'Guayabal', 'Aranjuez',
                        'Castilla', 'Doce de Octubre', 'Manrique', 'Popular', 'San Javier', 'Santa Cruz',
                        'El Estadio', 'Carlos E. Restrepo', 'Las Lomas', 'Calasanz', 'La Floresta',
                        'Suramericana', 'San Antonio de Prado', 'La Aguacatala', 'Las Palmas', 'Manila',
                        'Provenza', 'Perpetuo Socorro', 'La Sebastiana', 'Conquistadores', 'La Castellana',

                        // Cali
                        'Granada', 'El Peñón', 'Ciudad Jardín', 'Juanambú', 'Santa Rita', 'El Lido',
                        'San Fernando', 'Centenario', 'Versalles', 'Santa Mónica', 'Chipichape',
                        'El Ingenio', 'Pance', 'Ciudad 2000', 'El Vallado', 'Aguablanca',
                        'Caney', 'Tequendama', 'El Limonar', 'La Flora', 'Menga', 'Prados del Norte',
                        'Santa Teresita', 'San Antonio', 'Normandía', 'Junín', 'Obrero', 'Villacolombia',

                        // Barranquilla
                        'El Prado', 'Alto Prado', 'Riomar', 'Boston', 'Los Alpes', 'Villa Santos',
                        'Villa Country', 'Ciudad Jardín', 'Paraíso', 'Buenavista', 'Miramar',
                        'Bella Vista', 'El Golf', 'Altos del Prado', 'Nuevo Horizonte', 'El Tabor',
                        'Las Mercedes', 'Los Nogales', 'Portal del Prado', 'San Vicente', 'Santa Ana',
                        'Montecristo', 'Villa Carolina', 'El Porvenir', 'Las Flores', 'La Playa',

                        // Cartagena
                        'Bocagrande', 'Castillogrande', 'El Laguito', 'Crespo', 'Manga', 'Pie de la Popa',
                        'Centro Histórico', 'Marbella', 'El Cabrero', 'Getsemaní', 'Chambacú', 'La Boquilla',
                        'Torices', 'San Diego', 'Barrio Chino', 'Los Alpes', 'El Country', 'La Castellana',
                        'Blas de Lezo', 'El Socorro', 'Los Ejecutivos', 'Santa Lucía', 'El Bosque',

                        // Bucaramanga
                        'Cabecera del Llano', 'El Prado', 'Sotomayor', 'La Aurora', 'La Floresta',
                        'El Jardín', 'Pan de Azúcar', 'Conucos', 'El Tejar', 'La Victoria', 'San Alonso',
                        'Mutis', 'Ciudad Bolívar', 'La Joya', 'Provenza', 'Lagos del Cacique', 'Real de Minas',
                        'El Pablón', 'La Ceiba', 'San Luis', 'Morrorico', 'Campo Hermoso', 'García Rovira',

                        // Pereira
                        'Álamos', 'Los Alpes', 'América', 'Boston', 'Centenario', 'Centro', 'Cuba',
                        'El Jardín', 'Pinares de San Martín', 'Popular', 'Providencia', 'San Nicolás',
                        'La Villa', 'Villa Santana', 'Los Corales', 'Los Alpes', 'El Poblado', 'La Rebeca',

                        // Manizales
                        'Chipre', 'La Francia', 'Palermo', 'San Joaquín', 'La Estrella', 'Fátima',
                        'La Rambla', 'Rosales', 'La Enea', 'Milán', 'Alta Suiza', 'La Sultana',
                        'El Cable', 'Versalles', 'La Linda', 'Sancancio', 'El Bosque', 'Centro',

                        // Armenia
                        'La Patria', 'El Bosque', 'El Prado', 'Granada', 'La Cecilia', 'La Castellana',
                        'Las Américas', 'Los Quindos', 'Modelo', 'Nueva Cecilia', 'Providencia',
                        'Villa del Café', 'La Clarita', 'La Adiela', 'Puerto Espejo', 'Centenario',

                        // Santa Marta
                        'El Rodadero', 'Bello Horizonte', 'Taganga', 'El Jardín', 'Bellavista',
                        'Centro Histórico', 'Pescaíto', 'Gaira', 'Los Almendros', 'Bastidas',
                        'Mamatoco', 'El Prado', 'Tayrona', 'Cundí', 'María Eugenia', 'El Parque',

                        // Pasto
                        'Centro', 'San Andrés', 'Santiago', 'San Felipe', 'Obrero', 'Pandiaco',
                        'Las Cuadras', 'Atahualpa', 'Chapal', 'El Dorado', 'La Aurora', 'La Rosa',
                        'Lorenzo', 'Maridiaz', 'Popular', 'Pucalpa', 'San Miguel', 'Tamasagra',

                        // Ibagué
                        'La Pola', 'Belén', 'Centro', 'El Carmen', 'La Francia', 'La Granja',
                        'Piedra Pintada', 'Restrepo', 'Santa Helena', 'Varsovia', 'El Salado',
                        'Ambalá', 'Jardín', 'Calambeo', 'San Simón', 'Cadiz', 'San Bolívar',

                        // Cúcuta
                        'Caobos', 'La Riviera', 'Popular', 'San Eduardo', 'San Luis', 'Prados del Este',
                        'El Bosque', 'Latino', 'La Ceiba', 'Los Pinos', 'Niza', 'Quinta Oriental',
                        'Los Patios', 'Villa del Rosario', 'El Contento', 'Aeropuerto', 'La Floresta',

                        // Neiva
                        'Altico', 'Cándido', 'Centro', 'Quirinal', 'Santa Inés', 'Tenerife',
                        'Las Granjas', 'Los Mártires', 'Ipanema', 'El Jardín', 'Limonar',
                        'Los Cambulos', 'Prado Alto', 'Alberto Galindo', 'Las Brisas', 'Timanco',

                        // Villavicencio
                        'Barzal', 'La Esperanza', 'El Buque', 'Siete de Agosto', 'Villacentro',
                        'Popular', 'San Benito', 'La Grama', 'San Isidro', 'El Trapiche',
                        'Hacaritama', 'Porfía', 'La Madrid', 'La Reliquia', 'Américas', 'Catatumbo',

                        // Montería
                        'La Castellana', 'El Recreo', 'Costa de Oro', 'La Floresta', 'Nariño',
                        'P-5', 'La Granja', 'El Dorado', 'La Pradera', 'Los Laureles', 'Sucre',
                        'Santander', 'Pasatiempo', 'El Edén', 'Los Alcázares', 'San Jerónimo',

                        // Popayán
                        'Modelo', 'Pandiguando', 'Santa Inés', 'Alfonso López', 'Bolívar',
                        'Caldas', 'El Empedrado', 'La Esmeralda', 'Los Comuneros', 'Obrero',
                        'Pandiguando', 'Santa Inés', 'Valencia', 'Centro Histórico', 'Camilo Torres',

                        // Valledupar
                        'Alamos', 'Cañaguate', 'Centro', 'Dangond', 'El Prado', 'La Nevada',
                        'Loperena', 'Los Músicos', 'Novalito', 'Obrero', 'Primero de Mayo',
                        'San Jorge', 'San Joaquín', 'Santo Domingo', 'Villalba', 'Los Mayales',

                        // Sincelejo
                        'Boston', 'La Ford', 'Siete de Agosto', 'Ciudadela Suiza', 'El Cortijo',
                        'El Zumbado', 'La Campiña', 'La Selva', 'Las Américas', 'Las Flores',
                        'Las Margaritas', 'Majagual', 'Santa Cecilia', 'Venecia', 'Villa Mady',

                        // Riohacha
                        'Centro', 'Arriba', 'Abajo', 'Cooperativo', 'El Libertador', 'Marbella',
                        'Nuevo Horizonte', 'San Martín de Porres', 'Villa del Mar', 'Los Olivos',
                        'Las Tunas', 'Los Almendros', 'Paraíso', 'Comfamiliar', 'El Faro',

                        // Quibdó
                        'Alfonso López', 'Alameda Reyes', 'Camellon', 'Cristo Rey', 'El Jardín',
                        'El Reposo', 'El Silencio', 'Kennedy', 'Las Américas', 'Las Margaritas',
                        'Las Mercedes', 'Los Álamos', 'Los Laureles', 'Medrano', 'Niño Jesús',

                        // Tunja
                        'Centro', 'El Bosque', 'La María', 'Las Nieves', 'Los Patriotas',
                        'Manzanares', 'Muiscas', 'San Antonio', 'San Francisco', 'Santa Lucía',
                        'Surinama', 'Veinte de Julio', 'El Dorado', 'La Florida', 'La Pradera',

                        // Yopal
                        'El Centro', 'Bello Horizonte', 'El Gaván', 'El Laguito', 'La Campiña',
                        'La Floresta', 'Los Helechos', 'Los Ocobos', 'Maranatha', 'María Milena',
                        'Provivienda', 'San Martín', 'Villa Benilda', 'Villa Rocío', 'Villa Nelly',

                        // Mocoa
                        'Centro', 'Altos de la Colina', 'Huasipanga', 'José Homero', 'La Esmeralda',
                        'La Independencia', 'Las Américas', 'Los Pinos', 'Olímpico', 'Pablo VI',
                        'San Agustín', 'San Fernando', 'Villa Caimaron', 'Villa Colombia', 'Bolivar',

                        // Leticia
                        'Centro', '11 de Noviembre', 'Ciudad Jardín', 'José María Hernández',
                        'La Sarita', 'Nueva Esperanza', 'Porvenir', 'San Martín', 'Victoria Regia',
                        'El Águila', 'La Unión', 'San Antonio', 'Colombia', 'Simon Bolivar',

                        // Florencia
                        'Centro', 'Bellavista', 'Juan XXIII', 'La Libertad', 'Las Américas',
                        'Los Alpes', 'Malvinas', 'Pablo VI', 'San Francisco','Torasso', 'San Luis',
                        'La Vega', 'El Porvenir', 'La Consolata', 'Villa Colombia',


                        // Puerto Carreño (complemento)
                        'La Primavera', 'El Huila', 'San Jose', 'La Victoria',

                        // Otras ciudades importantes
                        // Palmira
                        'Zamorano', 'La Emilia', 'Llanogrande', 'Altamira', 'Sesquicentenario', 'Colombina',
                        'Campestre', 'El Recreo', 'La Benedicta', 'Olímpico', 'Santa Ana',

                        // Buga
                        'El Albergue', 'Divino Niño', 'La Ventura', 'José Antonio Galán', 'La Merced',
                        'El Molino', 'Ricaurte', 'El Carmen',

                        // Apartadó
                        'Fundadores', 'Diana Cardona', 'La Chinita', 'La Alborada', 'El Darién',
                        'La Paz', 'Veinte de Enero', 'Alfonso López',

                        // Buenaventura
                        'Rockefeller', 'El Firme', 'Viento Libre', 'Lleras', 'La Pilota', 'La Playita',
                        'Nayita', 'El Cristal', 'Punta del Este', 'San Francisco',

                        // Tumaco
                        'El Morrito', 'La Ciudadela', 'Nuevo Milenio', 'Los Puentes', 'El Voladero',
                        'La Floresta', 'Buenos Aires', 'Panamá',

                        // San Andrés Isla
                        'Loma', 'San Luis', 'El Cove', 'La Rocosa', 'El Bight', 'Orange Hill',
                        'Little Gough', 'La Loma', 'School House', 'Perry Hill',

                        // Uribia
                        'Centro', 'Aipiamana', 'Polvorín', 'Fonseca Siosi', 'La Florida',

                        // Mitú
                        'Centro', 'Inayá', 'San José', 'Belarmino Correa', 'La Unión', 'Cuervo Araoz',

                        // Inírida
                        'Zona Centro', 'Galán', 'Palmar', 'Berlín', 'Esperanza', 'Primavera',
                        'La Vorágine', 'Libertadores',

                        // San José del Guaviare
                        'El Modelo', 'El Centro', 'La Esperanza', 'Veinte de Julio', 'El Porvenir',
                        'San Jorge', 'El Dorado', 'La Granja'
                        ];
                        @endphp
                        @foreach($barrios as $barrio)
                        <option value="{{ $barrio }}"></option>
                        @endforeach
                    </datalist>
                    {!! $errors->first('Barrio_Cliente', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
                </div>
            </div>
            <!-- Correo Cliente -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="correo__cliente" class="form-label">Correo Cliente</label>
                    <input type="email" name="Correo_Cliente"
                        class="form-control @error('Correo_Cliente') is-invalid @enderror"
                        value="{{ old('Correo_Cliente', $sale?->Correo_Cliente ?? 'N/A@gmail.com') }}"
                        id="correo__cliente" placeholder="Correo Cliente">
                    {!! $errors->first('Correo_Cliente', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
                </div>
            </div>
        </div>

    </fieldset>



    <!-- Sección Datos de la Venta -->
    <fieldset class="border p-3 rounded mt-3 text-light">
        <legend class="w-auto px-2">Datos de la Venta</legend>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="user_id" class="form-label">Usuario que realiza la venta<span class="text-danger">*</span></label>
                    <select style="background-color:#27293D;" name="user_id" class="form-control @error('user_id') is-invalid @enderror" id="user_id" required>
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
                    <label for="estado" class="form-label">Estado de la Venta<span class="text-danger">*</span></label>
                    <select style="background-color:#27293D;" name="estado" class="form-control @error('estado') is-invalid @enderror" id="estado" required>
                        <option value="">Seleccione un estado</option>
                        @foreach($salesStatuses as $id => $nombre)
                        <option value="{{ $id }}" {{ old('estado', $sale?->estado) == $id ? 'selected' : '' }}>
                            {{ $nombre }}
                        </option>
                        @endforeach
                    </select>
                    {!! $errors->first('estado', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
                </div>
            </div>

        </div>
    </fieldset>



    <div class="">
        <fieldset class="border p-3 rounded mt-3">
            <legend class="w-auto px-2 text-light">Seleccionar Productos<span class="text-danger">*</span></legend>

            <!-- Campo de búsqueda -->
            <div class="mb-3">
                <input type="text" id="searchInput" class="form-control" placeholder="Buscar productos...">
            </div>

            <div class="table-responsive" style="max-height: 300px; overflow-y: auto;">
                <table class="table" id="productTable">
                    <thead>
                        <tr class="color-table">
                            <th>Seleccionar</th>
                            <th>IMG</th>

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

                            <td>
                                @if ( !empty($product->imagen) && !$product->imagen==0)
                                <img src="{{ asset('storage/' . $product->imagen) }}"
                                    alt="{{ $product->nombre }}"
                                    class="img-fluid rounded shadow"
                                    style="max-height: 20vh;"
                                    data-bs-toggle="modal"

                                    data-bs-target="#imageModal{{ $product->id }}">

                                @else
                                <span class="text-muted">N/A</span>
                                @endif
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
                    var productName = row.cells[2].textContent.toLowerCase();
                    row.style.display = productName.includes(searchValue) ? '' : 'none';
                });
            });

            // Calcular total al cargar la página
            actualizarTotalGeneral();
        });
    </script>


</div>
<div class="">
    <!-- Modal para cada producto -->
    @foreach($products as $product)
    @if (!empty($product->imagen) && $product->imagen != 0)
    <div class="modal fade" id="imageModal{{ $product->id }}" tabindex="-1" aria-labelledby="imageModalLabel{{ $product->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 80vw;">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-header border-0">
                    <h5 class="modal-title text-white" id="imageModalLabel{{ $product->id }}">{{ $product->nombre }}</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="{{ asset('storage/' . $product->imagen) }}"
                        alt="{{ $product->nombre }}"
                        class="img-fluid rounded shadow"
                        style="max-height: 80vh;">
                </div>
            </div>
        </div>
    </div>
    @endif
    @endforeach
</div>
