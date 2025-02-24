@extends('layouts.app')

@section('template_title')
{{ $sale->name ?? __('Show') . " " . __('Sale') }}
@endsection

@section('content')
<section class=" container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card  card-bg-color">
                <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                    <div class="float-left">
                        <span class="card-title">{{ __('Show') }} Sale</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('sales.index') }}"> {{ __('Back') }}</a>
                    </div>
                </div>

                <div class="card-body ">

                    <div class="form-group mb-2 mb20">
                        <strong>Nombre Cliente:</strong>
                        {{ $sale->Nombre_Cliente }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Apellido Cliente:</strong>
                        {{ $sale->Apellido_Cliente }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Direccion Cliente:</strong>
                        {{ $sale->Direccion_Cliente }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Ciudad Cliente:</strong>
                        {{ $sale->Ciudad_Cliente }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Departamento Cliente:</strong>
                        {{ $sale->Departamento_Cliente }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Telefono Cliente:</strong>
                        {{ $sale->Telefono_Cliente }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Correo Cliente:</strong>
                        {{ $sale->Correo_Cliente }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Usuario:</strong>
                        {{ $sale->user->name }} {{ $sale->user->last_name }}
                    </div>

                    <div class="form-group mb-2 mb20">
                        <strong>Estado:</strong>
                        {{ $sale->status->name }}
                    </div>

                </div>

                @if ($sale->details->isNotEmpty())
                <div class="card-body">
                    <h4>Detalles de la Venta</h4>
                    <table class="table ">
                        <thead>
                            <tr class="color-table">
                                <th>Producto</th>
                                <!-- <th>Producto</th> -->
                                <th>Cantidad</th>
                                <th>Precio Unitario</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sale->details as $detail)
                            <tr class="color-table">
                                <td> {{ $detail->product->nombre }} </td>
                                <!-- <td>{{ $detail->product_id ?? 'Sin nombre' }}</td> -->
                                <td>{{ $detail->cantidad }}</td>
                                <td>{{ number_format($detail->precio, 2) }}</td>
                                <td>{{ number_format($detail->sub_total, 2) }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <h4 class="text-end">Total: <strong>{{ number_format($sale->details->sum('total'), 2) }}</strong></h4>
                </div>
                @else
                <p class="text-center text-muted">No hay detalles de venta disponibles.</p>
                @endif


            </div>
        </div>
    </div>

</section>

@endsection