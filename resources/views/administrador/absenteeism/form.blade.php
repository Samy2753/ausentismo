@if (!empty($employee))
{!! Form::label('NameEmployeer', 'Empleado') !!}
{!! Form::text('NameEmployeer', $employee->full_name , ['class' => 'form-control', 'readonly']) !!}
@else
<div class="form-group">
    {!! Form::label('NameEmployeer', 'Eliga un empleado') !!}
    <select name="NameEmployeer" id="NameEmployeer" class="form-control">
        @foreach ($employees as $employee)
            <option value="{{$employee->id}} ">{{$employee->full_name}}</option>
        @endforeach
    </select>
</div>
@endif

<div class="form-group">
    {!! Form::label('Incapacity_type_id', 'Tipo incapacidad') !!}
    {!! Form::select('Incapacity_type_id', $listaIncapacidades, null, ['class' => 'form-control', 'placeholder' => '-- Eliga tipo de incacidad --', 'style' => 'width:100%;','id'=>'Incapacity_type_id','name'=>'Incapacity_type_id']) !!}
</div>

<h6>Inicio incapacidad</h6>
<input type="date" name="Start_date" id="Start_date" class='form-control'>

<i class="fas fa "></i>
<h6> Finalizacion incapacidad</h6>
<input type="date" name="End_date" id="End_date" class='form-control'>
<br>

<br>
<div class="form-group">
    {!! Form::label('Clasification', 'Clasificacion') !!}
<select id="Clasification" name='Clasification' class='form-control'>
    <option value="Inicial">Inicial</option>
    <option value="Prorroga">Prorroga</option>
</select>
</div>
<br>

</select>

