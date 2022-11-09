@extends('layouts.admin')

@section('template_title')
    Profesor
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Profesor') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('profesors.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nombre</th>
										<th>Apellido</th>
										<th>Telefono</th>
										<th>Direccion</th>
										<th>Email</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($profesors as $profesor)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $profesor->nombre }}</td>
											<td>{{ $profesor->apellido }}</td>
											<td>{{ $profesor->telefono }}</td>
											<td>{{ $profesor->direccion }}</td>
											<td>{{ $profesor->email }}</td>

                                            <td>
                                                <form action="{{ route('profesors.destroy',$profesor->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('profesors.show',$profesor->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('profesors.edit',$profesor->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $profesors->links() !!}
            </div>
        </div>
    </div>
@endsection
