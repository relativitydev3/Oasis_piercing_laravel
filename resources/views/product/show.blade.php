@extends('layouts.app')

@section('template_title')
    {{ $product->name ?? __('Show') . " " . __('Product') }}
@endsection

@section('content')

    <section class=" container-fluid  ">
        <div class="row">
            <div class="col-md-12">
                <div class="card  card-bg-color">
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
                                    {{ $product->material }}
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
                                    {{ $product->imagen }}
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
@endsection
