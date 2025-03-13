@extends('layouts.app')

@section('template_title')
Categories
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 ">
            <div class="card ">
                <div class="card-header ">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Categories') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('categories.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                {{ __('Create New') }}
                            </a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success m-4">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card-body ">
                    <div class="table-responsive ">
                        <table class="table table-striped table-hover  ">
                            <thead class="thead ">
                                <tr class="">
                                    <th>No</th>

                                    <th>IMG</th>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Estado</th>
                                    <!-- <th>Imagen</th> -->

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr class="">
                                    <td>{{ ++$i }}</td>

                                    <td class="text-center">
                                        @if($category->imagen && file_exists('storage/' . $category->imagen))
                                        <img src="{{ asset('storage/' . $category->imagen) }}"
                                            alt="{{ $category->nombre }}"
                                            class="img-thumbnail rounded shadow"
                                            style="max-width: 100px; height: auto; cursor: pointer;"
                                            data-bs-toggle="modal"
                                            data-bs-target="#imageModal{{ $category->id }}">
                                        @else   
                                        <span class="">A/N</span>
                                        @endif
                                    </td>

                                    <td>{{ $category->nombre }}</td>
                                    <td>{{ $category->descripcion }}</td>
                                    <td>{{ $category->estado }}</td>
                                    <!-- <td>{{ $category->imagen }}</td> -->

                                    <td>
                                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('categories.show', $category->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                            <a class="btn btn-sm btn-success" href="{{ route('categories.edit', $category->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $categories->withQueryString()->links('pagination::bootstrap-5') !!}
        </div>
    </div>
</div>

<!-- moal -->
@foreach($categories as $category)
<!-- Modal -->
<div class="modal fade" id="imageModal{{ $category->id }}" tabindex="-1" aria-labelledby="imageModalLabel{{ $category->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 80vw;">
        <div class="modal-content bg-transparent border-0">
            <div class="modal-header border-0">
                <h5 class="modal-title text-white" id="imageModalLabel{{ $category->id }}">{{ $category->nombre }}</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img src="{{ asset('storage/' . $category->imagen) }}"
                    alt="{{ $category->nombre }}"
                    class="img-fluid rounded shadow"
                    style="max-height: 80vh;">
            </div>
        </div>
    </div>
</div>
@endforeach

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var modals = document.querySelectorAll('.modal');
        modals.forEach(function(modal) {
            modal.addEventListener('hidden.bs.modal', function() {
                // Aquí puedes agregar cualquier lógica adicional que necesites al cerrar el modal
                // Por ejemplo, si modificaste estilos directamente, puedes revertirlos aquí
            });
        });
    });
</script>

@endsection