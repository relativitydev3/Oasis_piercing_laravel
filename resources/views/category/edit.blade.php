@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Category
@endsection

@section('content')
    <section class=" container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default  card-bg-color">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Category</span>
                    </div>
                    <div class="card-body ">
                        <form method="POST" action="{{ route('categories.update', $category->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('category.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
