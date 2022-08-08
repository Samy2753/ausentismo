@if (!empty($employee))
{!! Form::label('NameEmployee', 'Empleado') !!}
{!! Form::text('NameEmployee', $employee->full_name , ['class' => 'form-control', 'readonly']) !!}
@else
<div class="form-group">
    {!! Form::label('NameEmployee', 'Eliga un empleado') !!}
    <select name="NameEmployee" id="NameEmployee" class="form-control">
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

@if (!empty($illness))
{!! Form::label('Illness', 'Enfermedad') !!}
{!! Form::text('Illness', $cie_10->Description, ['class' => 'form-control', 'readonly']) !!}
@else
<div class="form-group">
    {!! Form::label('Illness', 'Seleccione enfermedad') !!}
    <select name="Illness" id="Illness" class="form-control">
        <option value="N/A">N/A</option>
        @foreach ($cie_10s as $cie_10)
            <option value="{{$cie_10->Code}} ">{{$cie_10->Description}}</option>
        @endforeach
    </select>
</div>
@endif

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


