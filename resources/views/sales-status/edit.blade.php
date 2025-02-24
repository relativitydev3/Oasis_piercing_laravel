@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Sales Status
@endsection

@section('content')
    <section class=" container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default color-table">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Sales Status</span>
                    </div>
                    <div class="card-body ">
                        <form method="POST" action="{{ route('sales-statuses.update', $salesStatus->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('sales-status.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
