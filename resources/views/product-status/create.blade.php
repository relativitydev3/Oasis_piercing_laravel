@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Product Status
@endsection

@section('content')
    <section class=" container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default  card-bg-color">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Product Status</span>
                    </div>
                    <div class="card-body color-table">
                        <form method="POST" action="{{ route('product-statuses.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('product-status.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
