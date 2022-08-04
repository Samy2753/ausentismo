@if (!empty($employee))
{!! Form::label('employee', 'Empleado') !!}
{!! Form::text('employee', $employee->full_name , ['class' => 'form-control', 'readonly']) !!}
@else
<div class="form-group">
    {!! Form::label('employee', 'Eliga un empleado') !!}
    <select name="employee" id="employee_id" class="form-control">
        @foreach ($employees as $employee)
            <option value="{{$employee->id}} ">{{$employee->full_name}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
        {!! Form::label('incapacity_type') !!}
        {!! Form::select('incapacity_type', $listaAbsenteeism, null, ['class' => 'form-control', 'placeholder' => '-- Eliga tipo de incapacidad --', 'style' => 'width:100%;']) !!}

</div>

