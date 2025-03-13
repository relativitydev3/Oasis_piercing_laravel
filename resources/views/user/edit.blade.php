@extends('layouts.app')

@section('template_title')
{{ __('Update') }} User
@endsection

@section('content')
<section class=" container-fluid">
    <div class="">
        <div class="col-md-12">

            <div class="card card-default">


                <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} User</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('user.index') }}"> {{ __('Back') }}</a>
                    </div>
                </div>
                <div class="card-body ">
                    <form method="POST" action="{{ route('user.update', $user->id) }}" role="form" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        @csrf

                        @include('user.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection