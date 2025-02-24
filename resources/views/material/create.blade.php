@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Material
@endsection

@section('content')
    <section class=" container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default color-table">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Material</span>
                    </div>
                    <div class="card-body ">
                        <form method="POST" action="{{ route('materials.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('material.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
