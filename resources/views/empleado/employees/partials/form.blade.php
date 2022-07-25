
    <div class="card-content bg-cyan">
        <div class="card-body">
            <div class="row align-items-center g-3">
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        {!! Form::label('FirstName', 'Nombres'); !!}
                        {!! Form::text('FirstName', null, ['class' => 'form-control'.($errors->has('FirstName') ? ' is-invalid':null), 'placeholder' => 'Ingrese el nombre', 'style' => 'width:100%;']) !!}
                        @error('FirstName')
                        <span class="invalid-feedback" role="alert">
                            <strong>*{{ $message }}</strong>
                        </span>

                        @enderror
                    </div>

                </div>




                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        {!! Form::label('LastName', 'Apellidos');  !!}
                        {!! Form::text('LastName', null, ['class' => 'form-control','pull-right'.($errors->has('LastName') ? ' is-invalid':null), 'placeholder' => 'Ingrese apellidos del empleado', 'style' => 'width:100%;']) !!}
                        @error('LastName')
                        <span class="invalid-feedback" role="alert">
                            <strong>*{{ $message }}</strong>
                        </span>

                        @enderror
                    </div>

                </div>

            </div>
        </div>
    </div>

<hr>

<div class="card-content bg-cyan border radius">
    <div class="card-body">
        <div class="row align-items-center g-3">

                        <div class="col-md-2">
                            <div class="form-group">
                                  {!! Form::label('DocumentType', 'Tipo de Documento');  !!}
                                    {!! Form::text('DocumentType', null, ['class' => 'form-control'.($errors->has('DocumentType') ? ' is-invalid':null), 'placeholder' => 'Tipo de documento', 'style' => 'width:100%;']) !!}

                                 {{--    {!! Form::label('DocumentType', 'Tipo de Documento');  !!}
                                    {!!Form::select('Documento',['Cédula','Tarjeta de identidad', 'Cédula de extranjería','Pasaporte'],null,['class' => 'form-control']) !!} --}}
                                    @error('DocumentType')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>*{{ $message }}</strong>
                                    </span>

                                    @enderror
                                </div>
                            </div>




                            <div class="col-md-2">
                                    <div class="form-group">
                                        {!! Form::label('DocumentNumber', 'Número de documento');  !!}
                                        {!! Form::text('DocumentNumber', null, ['class' => 'form-control'.($errors->has('DocumentNumber') ? ' is-invalid':null), 'placeholder' => 'No.' , 'style' => 'width:100%;']) !!}
                                        @error('DocumentNumber')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>*{{ $message }}</strong>
                                        </span>

                                        @enderror
                                    </div>

                             </div>

                             <div class="col-md-2">
                             <div class="form-group">
                                {!! Form::label('BaseSalary', 'Salario Base');  !!}
                                {!! Form::text('BaseSalary', null, ['class' => 'form-control'.($errors->has('BaseSalary') ? ' is-invalid':null), 'placeholder' => '$', 'style' => 'width:100%;']) !!}
                                @error('BaseSalary')
                                <span class="invalid-feedback" role="alert">
                                    <strong>*{{ $message }}</strong>
                                </span>

                                @enderror
                            </div> </div>

                            <div class="col-md-2">
                            <div class="form-group">
                                {!! Form::label('Position', 'Cargo');  !!}
                                {!! Form::text('Position', null, ['class' => 'form-control'.($errors->has('Position') ? ' is-invalid':null), 'placeholder' => 'Cargo en la empresa', 'style' => 'width:100%;']) !!}
                                @error('Position')
                                <span class="invalid-feedback" role="alert">
                                    <strong>*{{ $message }}</strong>
                                </span>

                                @enderror
                            </div></div>

                            <div class="col-md-2">
                            <div class="form-group">
                                {!! Form::label('Department', 'Area');  !!}
                                {!! Form::text('Department', null, ['class' => 'form-control'.($errors->has('Department') ? ' is-invalid':null), 'placeholder' => 'Area a la que pertenece', 'style' => 'width:100%;']) !!}
                                @error('Department')
                                <span class="invalid-feedback" role="alert">
                                    <strong>*{{ $message }}</strong>
                                </span>

                                @enderror
                            </div> </div>

                          {{--   <div class="col-md-2">
                            <div class="form-group">
                                {!! Form::label('SalaryDay', 'Salario día');  !!}
                                {!! Form::text('SalaryDay', null, ['class' => 'form-control'.($errors->has('SalaryDay') ? ' is-invalid':null), 'placeholder' => 'Salario día']) !!}
                                @error('SalaryDay')
                                <span class="invalid-feedback" role="alert">
                                    <strong>*{{ $message }}</strong>
                                </span>

                                @enderror
                            </div>  </div> --}}

        </div>
    </div>
</div>

<hr>




    <div class="card-content bg-cyan border radius">
        <div class="card-body">
            <div class="row align-items-center g-3">


                <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('EPS', 'EPS');  !!}
                                {!! Form::text('EPS', null, ['class' => 'form-control'.($errors->has('EPS') ? ' is-invalid':null), 'placeholder' => 'Ingrese EPS del empleado', 'style' => 'width:100%;']) !!}
                                @error('EPS')
                                <span class="invalid-feedback" role="alert">
                                    <strong>*{{ $message }}</strong>
                                </span>

                                @enderror
                            </div>
                        </div>
                         <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('AFP', 'AFP');  !!}
                                {!! Form::text('AFP', null, ['class' => 'form-control'.($errors->has('AFP') ? ' is-invalid':null), 'placeholder' => 'Fondo de pensiones y cesantias', 'style' => 'width:100%;']) !!}
                                @error('AFP')
                                <span class="invalid-feedback" role="alert">
                                    <strong>*{{ $message }}</strong>
                                </span>

                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('ARL', 'ARL');  !!}
                                {!! Form::text('ARL', null, ['class' => 'form-control'.($errors->has('ARL') ? ' is-invalid':null), 'placeholder' => 'Ingrese ARL del empleado', 'style' => 'width:100%;']) !!}
                                @error('ARL')
                                <span class="invalid-feedback" role="alert">
                                    <strong>*{{ $message }}</strong>
                                </span>

                                @enderror
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <hr>

