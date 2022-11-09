@extends('layouts.admin')

@section('template_title')
    Unidad
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Unidad') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('unidad.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Codigo</th>
										<th>Nombre</th>
										<th>Descripcion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($unidads as $unidad)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $unidad->codigo }}</td>
											<td>{{ $unidad->nombre }}</td>
											<td>{{ $unidad->descripcion }}</td>

                                            <td>
                                                <form action="{{ route('unidad.destroy',$unidad->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('unidad.show',$unidad->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('unidad.edit',$unidad->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $unidads->links() !!}
            </div>
        </div>
    </div>
@endsection
