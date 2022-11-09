@extends('layouts.admin')

@section('template_title')
    {{ $secretarium->name ?? 'Show Secretarium' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Secretarium</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('secretaria.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $secretarium->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $secretarium->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $secretarium->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $secretarium->email }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
