@extends('layouts.app')

@section('template_title')
{{ $sale->name ?? __('Show') . " " . __('Sale') }}
@endsection

@section('content')
<a style="margin: 1em;" href="{{ route('sale.PDF', $sale->id) }}" class="btn btn-success" target="_blank">
    <i class="fas fa-print "></i> {{ __('Imprimir PDF') }}
</a>
<section class="container-fluid my-4">
    <div class="row">
        <!-- Información de la Venta -->
        <div class="col-lg-6 mb-4">
            <div class="card text-light h-100">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">{{ __('Información de la Venta') }}</h5>
                    <!-- Puedes incluir aquí un botón de "Back" si lo deseas -->
                </div>
                <div class="card-body">
                    <!-- Fila 1: Nombre y Apellido -->
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <strong>{{ __('Nombre Cliente:') }}</strong>
                            <p>{{ $sale->Nombre_Cliente }}</p>
                        </div>
                        <div class="col-md-6">
                            <strong>{{ __('Apellido Cliente:') }}</strong>
                            <p>{{ $sale->Apellido_Cliente }}</p>
                        </div>
                    </div>
                    <!-- Fila 2: Documento y Método de Pago -->
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <strong>{{ __('Documento Cliente:') }}</strong>
                            <p>{{ $sale->Documento_Cliente }}</p>
                        </div>
                        <div class="col-md-6">
                            <strong>{{ __('Método de Pago:') }}</strong>
                            <p>{{ $sale->Metodo_pago }}</p>
                        </div>
                    </div>
                    <!-- Fila 3: Dirección y Ciudad -->
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <strong>{{ __('Dirección Cliente:') }}</strong>
                            <p>{{ $sale->Direccion_Cliente }}</p>
                        </div>
                        <div class="col-md-6">
                            <strong>{{ __('Ciudad Cliente:') }}</strong>
                            <p>{{ $sale->Ciudad_Cliente }}</p>
                        </div>
                    </div>
                    <!-- Fila 4: Departamento y Barrio -->
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <strong>{{ __('Departamento Cliente:') }}</strong>
                            <p>{{ $sale->Departamento_Cliente }}</p>
                        </div>
                        <div class="col-md-6">
                            <strong>{{ __('Barrio Cliente:') }}</strong>
                            <p>{{ $sale->Barrio_Cliente }}</p>
                        </div>
                    </div>
                    <!-- Fila 5: Teléfono y Correo -->
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <strong>{{ __('Teléfono Cliente:') }}</strong>
                            <p>{{ $sale->Telefono_Cliente }}</p>
                        </div>
                        <div class="col-md-6">
                            <strong>{{ __('Correo Cliente:') }}</strong>
                            <p>{{ $sale->Correo_Cliente }}</p>
                        </div>
                    </div>
                    <!-- Fila 6: Usuario y Estado -->
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <strong>{{ __('Usuario:') }}</strong>
                            <p>{{ $sale->user->name }} {{ $sale->user->last_name }}</p>
                        </div>
                        <div class="col-md-6">
                            <strong>{{ __('Estado:') }}</strong>
                            <p>{{ $sale->status->name }}</p>
                        </div>
                    </div>
                    <!-- Fila 7: Fechas de Venta y Actualización -->
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <strong>{{ __('Fecha de Venta:') }}</strong>
                            <p>{{ $sale->created_at->format('d/m/Y H:i') }}</p>
                        </div>
                        <div class="col-md-6">
                            <strong>{{ __('Fecha de actualización:') }}</strong>
                            <p>{{ $sale->updated_at->format('d/m/Y H:i') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Detalles de la Venta -->
        <div class="col-lg-6 mb-4">
            @if ($sale->details->isNotEmpty())
            <div class="card h-100">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">{{ __('Detalles de la Venta') }}</h5>
                    <a class="btn btn-primary btn-sm" href="{{ route('sales.index') }}">{{ __('Back') }}</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>{{ __('IMG') }}</th>
                                    <th>{{ __('Producto') }}</th>
                                    <th>{{ __('Cantidad') }}</th>
                                    <th>{{ __('Precio Unitario') }}</th>
                                    <th>{{ __('Subtotal') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sale->details as $detail)
                                <tr>
                                    <td class="text-center">
                                        @if ($detail->product && !empty($detail->product->imagen) && $detail->product->imagen != 0)
                                        <img src="{{ asset('storage/' . $detail->product->imagen) }}"
                                            alt="{{ $detail->product->nombre }}"
                                            class="img-thumbnail rounded shadow"
                                            style="max-width: 100px; cursor: pointer;"
                                            data-bs-toggle="modal"
                                            data-bs-target="#imageModal{{ $detail->product->id }}">
                                        @else
                                        <span class="text-muted">N/A</span>
                                        @endif
                                    </td>
                                    <td>{{ $detail->product->nombre ?? __('Sin nombre') }}</td>
                                    <td>{{ $detail->cantidad }}</td>
                                    <td>{{ number_format($detail->precio, 2) }}</td>
                                    <td>{{ number_format($detail->sub_total, 2) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <h4 class="text-end mt-3">
                        {{ __('Total:') }}
                        <strong>{{ number_format($sale->details->sum('total'), 2) }}</strong>
                    </h4>
                </div>
            </div>
            @else
            <div class="alert alert-info text-center" role="alert">
                {{ __('No hay detalles de venta disponibles.') }}
            </div>
            @endif
        </div>
    </div>
</section>

<!-- Modal para mostrar imágenes de productos -->
@foreach($sale->details as $detail)
@if($detail->product && !empty($detail->product->imagen) && $detail->product->imagen != 0)
<div class="modal fade" id="imageModal{{ $detail->product->id }}" tabindex="-1" aria-labelledby="imageModalLabel{{ $detail->product->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 80vw;">
        <div class="modal-content bg-transparent border-0">
            <div class="modal-header border-0">
                <h5 class="modal-title text-white" id="imageModalLabel{{ $detail->product->id }}">
                    {{ $detail->product->nombre }}
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img src="{{ asset('storage/' . $detail->product->imagen) }}"
                    alt="{{ $detail->product->nombre }}"
                    class="img-fluid rounded shadow"
                    style="max-height: 80vh;">
            </div>
        </div>
    </div>
</div>
@endif
@endforeach

@endsection