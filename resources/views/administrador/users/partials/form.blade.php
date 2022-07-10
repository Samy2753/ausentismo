<div class="form-group">
    {!! Form::label('name', 'Nombre')!!}
    {!! Form::text('name',null,['class' => 'form control','placeholder' => 'Ingrese el nombre completo de usuario']) !!}
</div>
<div class="form-group">
    {!! Form::label('email', 'Correo electronico')!!}
    {!! Form::email('email',null,['class' => 'form control','placeholder' => 'Ingrese el Correo de usuario']) !!}
</div>

<div class="form-group">
    {!! Form::label('password', 'Clave')!!}
    {!! Form::password('password',['class' => 'form control','placeholder' => 'Ingrese la clave']) !!}
</div>


