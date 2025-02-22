@extends('layouts.app')

@section('template_title')
Products
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card color-table">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Products') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
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
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead ">
                                <tr class="color-table">
                                    <th>No</th>

                                    <th>IMG</th>
                                    <th>Nombre</th>
                                    <th>Material</th>
                                    <th>Precio</th>
                                    <th>Stock</th>
                                    <!-- <th>Imagen</th> -->
                                    <th>Descripcion</th>
                                    <th>Estado</th>
                                    <th>Categorías</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                <tr class="color-table">
                                    <td>{{ ++$i }}</td>

                                    <td class="text-center">
                                        @if($product->imagen && file_exists('storage/' . $product->imagen))
                                        <img src="{{ asset('storage/' . $product->imagen) }}"
                                            alt="{{ $product->nombre }}"
                                            class="img-thumbnail rounded shadow"
                                            style="max-width: 100px; height: auto; cursor: pointer;"
                                            data-bs-toggle="modal"
                                            data-bs-target="#imageModal{{ $product->id }}">
                                        @else
                                        <span class="">A/N</span>
                                        @endif
                                    </td>


                                    <td>{{ $product->nombre }}</td>
                                    <td>{{ $product->material }}</td>
                                    <td>{{ $product->precio }}</td>
                                    <td>{{ $product->stock }}</td>
                                    <!-- <td>{{ $product->imagen }}</td> -->
                                    <td>{{ $product->descripcion }}</td>
                                    <td>{{ $product->estado }}</td>
                                    <td>
                                        @if($product->categories->isNotEmpty())
                                        @foreach($product->categories as $category)
                                        <span class="badge bg-primary">{{ $category->nombre }}</span>
                                        @endforeach
                                        @else
                                        <span class="text-muted">Sin categoría</span>
                                        @endif
                                    </td>


                                    <td>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('products.show', $product->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                            <a class="btn btn-sm btn-success" href="{{ route('products.edit', $product->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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

            {!! $products->withQueryString()->links('pagination::bootstrap-5') !!}
        </div>
    </div>
</div>

<!-- modal -->
@foreach($products as $product)
    <!-- Modal -->
    <div class="modal fade" id="imageModal{{ $product->id }}" tabindex="-1" aria-labelledby="imageModalLabel{{ $product->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 80vw;">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-header border-0">
                    <h5 class="modal-title text-white" id="imageModalLabel{{ $product->id }}">{{ $product->nombre }}</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="{{ asset('storage/' . $product->imagen) }}" 
                         alt="{{ $product->nombre }}" 
                         class="img-fluid rounded shadow" 
                         style="max-height: 80vh;">
                </div>
            </div>
        </div>
    </div>
@endforeach

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var modals = document.querySelectorAll('.modal');
        modals.forEach(function (modal) {
            modal.addEventListener('hidden.bs.modal', function () {
                // Aquí puedes agregar cualquier lógica adicional que necesites al cerrar el modal
                // Por ejemplo, si modificaste estilos directamente, puedes revertirlos aquí
            });
        });
    });
</script>

@endsection