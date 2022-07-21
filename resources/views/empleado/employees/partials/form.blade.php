
<div class="form-group">
    {!! Form::label('FirstName', 'Nombre'); !!}
    {!! Form::text('FirstName', null, ['class' => 'form-control'.($errors->has('FirstName') ? ' is-invalid':null), 'placeholder' => 'Ingrese el nombre']) !!}
    @error('FirstName')
    <span class="invalid-feedback" role="alert">
        <strong>*{{ $message }}</strong>
    </span>

    @enderror
    </div>

    <div class="form-group">
        {!! Form::label('LastName', 'Apellidos');  !!}
        {!! Form::text('LastName', null, ['class' => 'form-control'.($errors->has('LastName') ? ' is-invalid':null), 'placeholder' => 'Ingrese apellidos del empleado']) !!}
        @error('LastName')
        <span class="invalid-feedback" role="alert">
            <strong>*{{ $message }}</strong>
        </span>

        @enderror
    </div>

   <div class="form-group">
        {!! Form::label('DocumentType', 'Tipo de Documento');  !!}
        {!! Form::text('DocumentType', null, ['class' => 'form-control'.($errors->has('DocumentType') ? ' is-invalid':null), 'placeholder' => 'Tipo de documento']) !!}
        @error('DocumentType')
        <span class="invalid-feedback" role="alert">
            <strong>*{{ $message }}</strong>
        </span>

        @enderror
    </div>

    <div class="form-group">
        {!! Form::label('DocumentNumber', 'Numero de documento');  !!}
        {!! Form::text('DocumentNumber', null, ['class' => 'form-control'.($errors->has('DocumentNumber') ? ' is-invalid':null), 'placeholder' => 'Número de documento']) !!}
        @error('DocumentNumber')
        <span class="invalid-feedback" role="alert">
            <strong>*{{ $message }}</strong>
        </span>

        @enderror
    </div>

    <div class="form-group">
        {!! Form::label('BaseSalary', 'Salario');  !!}
        {!! Form::text('BaseSalary', null, ['class' => 'form-control'.($errors->has('BaseSalary') ? ' is-invalid':null), 'placeholder' => 'Salario Base']) !!}
        @error('BaseSalary')
        <span class="invalid-feedback" role="alert">
            <strong>*{{ $message }}</strong>
        </span>

        @enderror
    </div>

   {{--  <div class="form-group">
        {!! Form::label('SalaryDay', 'Salario día');  !!}
        {!! Form::text('SalaryDay', null, ['class' => 'form-control'.($errors->has('SalaryDay') ? ' is-invalid':null), 'placeholder' => 'Salario día']) !!}
        @error('SalaryDay')
        <span class="invalid-feedback" role="alert">
            <strong>*{{ $message }}</strong>
        </span>

        @enderror
    </div> --}}

    <div class="form-group">
        {!! Form::label('Position', 'Cargo');  !!}
        {!! Form::text('Position', null, ['class' => 'form-control'.($errors->has('Position') ? ' is-invalid':null), 'placeholder' => 'Cargo']) !!}
        @error('Position')
        <span class="invalid-feedback" role="alert">
            <strong>*{{ $message }}</strong>
        </span>

        @enderror

        <div class="form-group">
            {!! Form::label('Department', 'Area');  !!}
            {!! Form::text('Department', null, ['class' => 'form-control'.($errors->has('Department') ? ' is-invalid':null), 'placeholder' => 'Area a la que pertenece']) !!}
            @error('Department')
            <span class="invalid-feedback" role="alert">
                <strong>*{{ $message }}</strong>
            </span>

            @enderror
        </div>

    </div>
    <div class="form-group">
        {!! Form::label('EPS', 'EPS');  !!}
        {!! Form::text('EPS', null, ['class' => 'form-control'.($errors->has('EPS') ? ' is-invalid':null), 'placeholder' => 'Ingrese EPS del empleado']) !!}
        @error('EPS')
        <span class="invalid-feedback" role="alert">
            <strong>*{{ $message }}</strong>
        </span>

        @enderror
    </div>


    <div class="form-group">
        {!! Form::label('AFD', 'AFD');  !!}
        {!! Form::text('AFD', null, ['class' => 'form-control'.($errors->has('AFD') ? ' is-invalid':null), 'placeholder' => 'Ingrese AFD del empleado']) !!}
        @error('AFD')
        <span class="invalid-feedback" role="alert">
            <strong>*{{ $message }}</strong>
        </span>

        @enderror
    </div>



    <div class="form-group">
        {!! Form::label('ARL', 'ARL');  !!}
        {!! Form::text('ARL', null, ['class' => 'form-control'.($errors->has('ARL') ? ' is-invalid':null), 'placeholder' => 'Ingrese ARL del empleado']) !!}
        @error('ARL')
        <span class="invalid-feedback" role="alert">
            <strong>*{{ $message }}</strong>
        </span>

        @enderror
    </div>



