<div class="box box-info padding-1">
    <div class="box-body">


        <div class="form-group">
            <label for="">GRADO</label>
            <select class="form-control" name="grado_id" id="">
                @foreach ($grado as $g)
                <option value="{{$g->id}}">{{$g->nombre}} / {{$g->seccio}}</option>
                @endforeach

                @if (isset($curo))
                <option value="{{$g->grado_id}}">{{$curo->grado->nombre}} / {{$curo->grado->seccio}}</option>
                @endif

            </select>
        </div>


        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $curo->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('maximo') }}
            {{ Form::text('maximo', $curo->maximo, ['class' => 'form-control' . ($errors->has('maximo') ? ' is-invalid' : ''), 'placeholder' => 'Maximo']) }}
            {!! $errors->first('maximo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>