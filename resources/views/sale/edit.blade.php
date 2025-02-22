@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Sale
@endsection

@section('content')
    <section class=" container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default card-bg-color">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Sale</span>
                    </div>
                    <div class="card-body ">
                        <form method="POST" action="{{ route('sales.update', $sale->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('sale.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
