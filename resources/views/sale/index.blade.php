@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <span>{{ __('Sales') }}</span>
          <a href="{{ route('sales.create') }}" class="btn btn-primary btn-sm">
            {{ __('Create New') }}
          </a>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success m-4">
          <p>{{ $message }}</p>
        </div>
        @endif

        <!-- Filtros con formulario GET -->
        <div class="card-body">
          <form action="{{ route('sales.index') }}" method="GET">
            <div class="row mb-3 filters">
              <div class="col">
                <input type="text" name="nombre" placeholder="Buscar Nombre" class="form-control" value="{{ request('nombre') }}">
              </div>
              <div class="col">
                <input type="text" name="estado" placeholder="Buscar Estado" class="form-control" value="{{ request('estado') }}">
              </div>
              <div class="col">
                <input type="text" name="metodo_pago" placeholder="Buscar Método de Pago" class="form-control" value="{{ request('metodo_pago') }}">
              </div>
              <div class="col-auto">
                <button type="submit" class="btn btn-primary">Filtrar</button>
                <a href="{{ route('sales.index') }}" class="btn btn-secondary">Limpiar</a>
              </div>
            </div>
          </form>

          <div class="table-responsive">
            <table class="table table-striped table-hover" style="table-layout: fixed; width: 100%; margin-left: auto;">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nombre Cliente</th>
                  <th>Apellido Cliente</th>
                  <th>Documento Cliente</th>
                  <th>Dirección Cliente</th>
                  <th>Ciudad Cliente</th>
                  <th>Departamento Cliente</th>
                  <th>Teléfono Cliente</th>
                  <th>Correo Cliente</th>
                  <th>Usuario</th>
                  <th>Estado</th>
                  <th>Método de Pago</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($sales as $index => $sale)
                @if ($sale->estado !=4)
                <tr style="background-color: #C8E6C9;">


                <tr>
                  <td>{{ $index + 1 }}</td>
                  <td>{{ $sale->Nombre_Cliente }}</td>
                  <td>{{ $sale->Apellido_Cliente }}</td>
                  <td>{{ $sale->Documento_Cliente }}</td>
                  <td>{{ $sale->Direccion_Cliente }}</td>
                  <td>{{ $sale->Ciudad_Cliente }}</td>
                  <td>{{ $sale->Departamento_Cliente }}</td>
                  <td>{{ $sale->Telefono_Cliente }}</td>
                  <td>{{ $sale->Correo_Cliente }}</td>
                  <td>{{ $sale->user ? $sale->user->name : 'N/A' }}</td>
                  <td>{{ $sale->estado }}</td>
                  <td>{{ $sale->Metodo_pago }}</td>
                  <td>
                    <a href="{{ url('/sales/'.$sale->id) }}" class="btn btn-sm btn-primary">
                      <i class="fa fa-fw fa-eye"></i> Show
                    </a>
                    <a href="{{ url('/sales/'.$sale->id.'/edit') }}" class="btn btn-sm btn-success">
                      <i class="fa fa-fw fa-edit"></i> Edit
                    </a>
                    <form action="{{ url('/sales/'.$sale->id) }}" method="POST" style="display:inline;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Está seguro de eliminar?')">
                        <i class="fa fa-fw fa-trash"></i> Delete
                      </button>
                    </form>
                  </td>
                </tr>
                @endif
                @endforeach
              </tbody>
            </table>
            {!! $sales->withQueryString()->links('pagination::bootstrap-5') !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection