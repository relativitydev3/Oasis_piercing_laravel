@extends('layouts.app')

@section('template_title')
Sales
@endsection

@section('content')

<div class="container-fluid"> <!-- Ajusta el valor del margin-left según el ancho del sidebar -->
    <div class="row" >
        <div class="col-sm-12" >
            <div class="card" >
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

                <div class="card-body" >
                    <div class="table-responsive">
                        <table class="table table-striped table-hover" style="table-layout: fixed; width: 100%; margin-left: auto;">
                            <thead class="thead">
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
                            </thead>
                            <tbody>
                                @foreach ($sales as $sale)
                                @if ($sale->status->id !== 4)
                                <tr>
                                    <td style="word-wrap: break-word; white-space: normal;">{{ ++$i }}</td>
                                    <td style="word-wrap: break-word; white-space: normal;">{{ $sale->Nombre_Cliente }}</td>
                                    <td style="word-wrap: break-word; white-space: normal;">{{ $sale->Apellido_Cliente }}</td>
                                    <td style="word-wrap: break-word; white-space: normal;">{{ $sale->Documento_Cliente }}</td>
                                    <td style="word-wrap: break-word; white-space: normal;">{{ $sale->Direccion_Cliente }}</td>
                                    <td style="word-wrap: break-word; white-space: normal;">{{ $sale->Ciudad_Cliente }}</td>
                                    <td style="word-wrap: break-word; white-space: normal;">{{ $sale->Departamento_Cliente }}</td>
                                    <td style="word-wrap: break-word; white-space: normal;">{{ $sale->Telefono_Cliente }}</td>
                                    <td style="word-wrap: break-word; white-space: normal;">{{ $sale->Correo_Cliente }}</td>
                                    <td style="word-wrap: break-word; white-space: normal;">{{ $sale->user->name }}</td>
                                    <td style="word-wrap: break-word; white-space: normal;">{{ $sale->status->name }}</td>
                                    <td style="word-wrap: break-word; white-space: normal;">{{ $sale->Metodo_pago }}</td>
                                    <td>
                                        <form action="{{ route('sales.destroy', $sale->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary" href="{{ route('sales.show', $sale->id) }}">
                                                <i class="fa fa-fw fa-eye"></i> {{ __('Show') }}
                                            </a>
                                            <a class="btn btn-sm btn-success" href="{{ route('sales.edit', $sale->id) }}">
                                                <i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}
                                            </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;">
                                                <i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $sales->withQueryString()->links() !!}
        </div>
    </div>
</div>

@endsection