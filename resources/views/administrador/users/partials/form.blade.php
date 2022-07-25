{{-- <div class="form-group">
    {!! Form::label('employee', 'Eliga un empleado') !!}
    {!! Form::select('employee', $employees, null, ['class' => 'form-control', 'placeholder' => '-- Elija un empleado --', 'style' => 'width:100%;']) !!}

    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>*{{ $message }}</strong>
        </span>
    @enderror
</div>
 --}}

 <div class="form-group">
    {!! Form::label('employee', 'Elija un empleado') !!}
    <select name="employee" id="employee_id" class="form-control">
        @foreach ($employees as $employee)
            <option value="{{$employee->id}} ">{{$employee->FirstName}} {{$employee->LastName}}</option>
        @endforeach
    </select>
</div>
{{-- <div class="form-group">
    {!! Form::label('name', 'Nombre'); !!}
    {!! Form::text('name', null, ['class' => 'form-control'.($errors->has('name') ? ' is-invalid':null), 'placeholder' => 'Ingrese el nombre']) !!}
    @error('name')
    <span class="invalid-feedback" role="alert">
        <strong>*{{ $message }}</strong>
    </span>

    @enderror
    </div> --}}

    <div class="form-group">
        {!! Form::label('email', 'Correo electrónico');  !!}
        {!! Form::email('email', null, ['class' => 'form-control'.($errors->has('name') ? ' is-invalid':null), 'placeholder' => 'Ingrese el correo electrónico']) !!}
       {{--  @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>*{{ $message }}</strong>
        </span>

        @enderror --}}
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Contraseña');  !!}
        {!! Form::password('password', ['class' => 'form-control'.($errors->has('password') ? ' is-invalid':null), 'placeholder' => 'Ingrese la contraseña']) !!}
    @error('password')
    <span class="invalid-feedback" role="alert">
        <strong>*{{ $message }}</strong>
    </span>

    @enderror
    </div>

    <div class="form-group">
        {!! Form::label('roles', 'Eliga un rol') !!}
        {!! Form::select('roles', $listaRoles, null, ['class' => 'form-control', 'placeholder' => '-- Eliga un rol --', 'style' => 'width:100%;']) !!}
    {{--
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>*{{ $message }}</strong>
            </span>
        @enderror --}}
    </div>

