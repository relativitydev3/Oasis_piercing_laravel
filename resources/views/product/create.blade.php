@extends('layouts.app')

@section('template_title')
{{ __('Create') }} Product
@endsection

@section('content')
<section class=" container-fluid">
    <div class="row">
        <div class="col-md-12">

            <div class="card card-default  ">

                <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Product</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('products.index') }}"> {{ __('Back') }}</a>
                    </div>
                </div>
                <div class="card-body ">
                    <form method="POST" action="{{ route('products.store') }}" role="form" enctype="multipart/form-data" class="">
                        @csrf

                        @include('product.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection