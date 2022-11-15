@extends('layouts.admin')

@section('template_title')
    {{ $curo->name ?? 'Show Curo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Curo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('curos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Grado Id:</strong>
                            {{ $curo->grado_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $curo->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Maximo:</strong>
                            {{ $curo->maximo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
