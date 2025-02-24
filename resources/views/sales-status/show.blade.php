@extends('layouts.app')

@section('template_title')
    {{ $salesStatus->name ?? __('Show') . " " . __('Sales Status') }}
@endsection

@section('content')
    <section class=" container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card color-table">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Sales Status</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('sales-statuses.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body text-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Name:</strong>
                                    {{ $salesStatus->name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Description:</strong>
                                    {{ $salesStatus->description }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
