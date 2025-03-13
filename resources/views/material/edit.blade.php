@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Material
@endsection

@section('content')
    <section class=" container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Material</span>
                    </div>
                    <div class="card-body ">
                        <form method="POST" action="{{ route('materials.update', $material->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('material.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
