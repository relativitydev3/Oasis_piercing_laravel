@extends('layouts.app')

@section('template_title')
    {{ $productStatus->name ?? __('Show') . " " . __('Product Status') }}
@endsection

@section('content')
    <section class=" container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card  text-light">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Product Status</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('product-statuses.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body text-white ">
                        
                                <div class="form-group mb-2 mb20 ">
                                    <strong>Name:</strong>
                                    {{ $productStatus->name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Description:</strong>
                                    {{ $productStatus->description }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
