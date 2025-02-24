@extends('layouts.app')

@section('template_title')
Materials
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 ">
            <div class="card color-table">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Materials') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('materials.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
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

                <div class="card-body  color-table">
                    <div class="table-responsive ">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr class="color-table">
                                    <th>No</th>

                                    <th>Nombre</th>
                                    <th>Descripcion</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($materials as $material)
                                <tr class=" color-table">
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $material->nombre }}</td>
                                    <td>{{ $material->descripcion }}</td>

                                    <td>
                                        <form action="{{ route('materials.destroy', $material->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('materials.show', $material->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                            <a class="btn btn-sm btn-success" href="{{ route('materials.edit', $material->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
            {!! $materials->withQueryString()->links() !!}
        </div>
    </div>
</div>
@endsection