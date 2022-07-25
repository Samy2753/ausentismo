<div class="form-group">
    {!! Form::label('name', 'Nombre'); !!}
    {!! Form::text('name', null, ['class' => 'form-control'.($errors->has('name') ? ' is-invalid':null), 'placeholder' => 'Ingrese el nombre del rol']) !!}
    @error('name')
    <span class="invalid-feedback" role="alert">
        <strong>*{{ $message }}</strong>
    </span>
    @enderror
    </div>
    <hr>
    <h2 class="h3">Asignación de permisos</h2>
@foreach ($permissions as $permission)
    <div>
        <label>
                {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']) !!}
                {{$permission->description}}
        </label>
    </div>
@endforeach
