@extends('layouts.app')

@section('template_title')
{{ $user->name ?? __('Show') . " " . __('User') }}
@endsection

@section('content')
<section class=" container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-bg-color">
                <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                    <div class="float-left">
                        <span class="card-title">{{ __('Show') }} User</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('user.index') }}"> {{ __('Back') }}</a>
                    </div>
                </div>

                <div class="card-body">

                    <div class="form-group mb-2 mb20 text-white">
                        <strong>Name:</strong>
                        {{ $user->name }}
                    </div>
                    <div class="form-group mb-2 mb20 text-white">
                        <strong>Last Name:</strong>
                        {{ $user->last_name }}
                    </div>
                    <div class="form-group mb-2 mb20 text-white">
                        <strong>Cc:</strong>
                        {{ $user->CC }}
                    </div>
                    <div class="form-group mb-2 mb20 text-white">
                        <strong>Email:</strong>
                        {{ $user->email }}
                    </div>
                    <div class="form-group mb-2 mb20 text-white">
                        <strong>IMG:</strong>
                        @if($user->imagen && file_exists('storage/' . $user->imagen))
                        <img src="{{ asset('storage/' . $user->imagen) }}"
                            alt="{{ $user->nombre }}"
                            class="img-thumbnail rounded shadow"
                            style="max-width: 100px; height: auto; cursor: pointer;"
                            data-bs-toggle="modal"
                            data-bs-target="#imageModal{{ $user->id }}">
                        @else
                        <span>A/N</span>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<!-- modal -->

<!-- Modal: se renderiza solo si existe la imagen -->
@if (!empty($user->imagen) && $user->imagen != 0)
<div class="modal fade" id="imageModal{{ $user->id }}" tabindex="-1" aria-labelledby="imageModalLabel{{ $user->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 80vw;">
        <div class="modal-content bg-transparent border-0">
            <div class="modal-header border-0">
                <h5 class="modal-title text-white" id="imageModalLabel{{ $user->id }}">{{ $user->nombre }}</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img src="{{ asset('storage/' . $user->imagen) }}"
                    alt="{{ $user->nombre }}"
                    class="img-fluid rounded shadow"
                    style="max-height: 80vh;">
            </div>
        </div>
    </div>
</div>
@endif

@endsection