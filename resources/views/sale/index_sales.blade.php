@extends('layouts.app')

@section('template_title')
Sales
@endsection

@section('content')
<div class="container-fluid"> <!-- Ajusta el valor del margin-left según el ancho del sidebar -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title">
                            {{ __('Sales') }}
                        </span>
                        <div class="float-right">
                            <a href="{{ route('sales.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                {{ __('Create New') }}
                            </a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success m-4">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover" style="width: 100%; margin-left: auto;">
                            <thead class="thead">
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
                                <tr>
                                    <th>No</th>
                                    <th>Nombre Cliente</th>
                                    <th>Apellido Cliente</th>
                                    <th>Documento</th>
                                    <th>Dirección Cliente</th>
                                    <th>Ciudad Cliente</th>
                                    <th>Departamento Cliente</th>
                                    <th>Teléfono Cliente</th>
                                    <th>Correo Cliente</th>
                                    <th>User Id</th>
                                    <th>Estado</th>
                                    <th>Método de Pago</th>
                                    <th></th>
                                </tr>

                            <tbody>
                                @foreach ($sales as $sale)
                                @if ($sale->status->id !==4)
                                <tr>
                                    <td style="overflow-wrap: break-word; white-space: normal;">{{ ++$i }}</td>
                                    <td style="overflow-wrap: break-word; white-space: normal;">{{ $sale->Nombre_Cliente }}</td>
                                    <td style="overflow-wrap: break-word; white-space: normal;">{{ $sale->Apellido_Cliente }}</td>
                                    <td style="overflow-wrap: break-word; white-space: normal;">{{ $sale->Documento_Cliente }}</td>
                                    <td style="overflow-wrap: break-word; white-space: normal;">{{ $sale->Direccion_Cliente }}</td>
                                    <td style="overflow-wrap: break-word; white-space: normal;">{{ $sale->Ciudad_Cliente }}</td>
                                    <td style="overflow-wrap: break-word; white-space: normal;">{{ $sale->Departamento_Cliente }}</td>
                                    <td style="overflow-wrap: break-word; white-space: normal;">{{ $sale->Telefono_Cliente }}</td>
                                    <td style="overflow-wrap: break-word; white-space: normal;">{{ $sale->Correo_Cliente }}</td>
                                    <td  style="overflow-wrap: break-word; white-space: normal;">{{ $sale->user ? $sale->user->name : 'N/A' }}</td>
                                    <td style="overflow-wrap: break-word; white-space: normal;">{{ $sale->status->name }}</td>
                                    <td style="overflow-wrap: break-word; white-space: normal;">{{ $sale->Metodo_pago }}</td>
                                    <td>
                                        <a class="btn btn-sm btn-primary" href="{{ route('sales.show', $sale->id) }}">
                                            <i class="fa fa-fw fa-eye"></i> {{ __('Show') }}
                                        </a>

                                    </td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

             

            </div>
            {!! $sales->withQueryString()->links('pagination::bootstrap-5') !!}
        </div>
    </div>
</div>

@endsection