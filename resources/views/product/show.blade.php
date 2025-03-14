@extends('layouts.app')

@section('template_title')
{{ $product->name ?? __('Show') . " " . __('Product') }}
@endsection

@section('content')

<section class=" container-fluid  ">
    <div class="row">
        <div class="col-md-12">
            <div class="card   text-light">
                <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                    <div class="float-left">
                        <span class="card-title">{{ __('Show') }} Product</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('products.index') }}"> {{ __('Back') }}</a>
                    </div>
                </div>

                <div class="card-body ">

                    <div class="form-group mb-2 mb20">
                        <strong>Nombre:</strong>
                        {{ $product->nombre }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Material:</strong>
                        {{ $product->material->nombre }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Precio:</strong>
                        {{ $product->precio }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Stock:</strong>
                        {{ $product->stock }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Imagen:</strong>
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
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Descripcion:</strong>
                        {{ $product->descripcion }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Estado:</strong>
                        {{ $product->status->name }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal: se renderiza solo si existe la imagen -->
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



@endsection

