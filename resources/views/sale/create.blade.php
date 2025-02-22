@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Sale
@endsection

@section('content')
    <section class=" container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default card-bg-color">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Sale</span>
                    </div>
                    <div class="card-body ">
                        <form method="POST" action="{{ route('sales.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('sale.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
