@extends('layouts.app')

@section('template_title')
    Sales
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card  color-table">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Sales') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('sales.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                <thead class="thead">
                                    <tr class="color-table">
                                        <th>No</th>
                                        
									<th >Nombre Cliente</th>
									<th >Apellido Cliente</th>
									<th >Direccion Cliente</th>
									<th >Ciudad Cliente</th>
									<th >Departamento Cliente</th>
									<th >Telefono Cliente</th>
									<th >Correo Cliente</th>
									<th >User Id</th>
									<th >Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sales as $sale)
                                        <tr class="color-table">
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $sale->Nombre_Cliente }}</td>
										<td >{{ $sale->Apellido_Cliente }}</td>
										<td >{{ $sale->Direccion_Cliente }}</td>
										<td >{{ $sale->Ciudad_Cliente }}</td>
										<td >{{ $sale->Departamento_Cliente }}</td>
										<td >{{ $sale->Telefono_Cliente }}</td>
										<td >{{ $sale->Correo_Cliente }}</td>
										<td >{{ $sale->user_id }}</td>
										<td >{{ $sale->estado }}</td>

                                            <td>
                                                <form action="{{ route('sales.destroy', $sale->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('sales.show', $sale->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('sales.edit', $sale->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $sales->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
