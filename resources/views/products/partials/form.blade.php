<div class="form-group">
    {!! Form::label('name', 'Nombre del inmueble') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('costo', 'Costo') !!}
    {!! Form::text('costo', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('tipo', 'Tipo') !!}
    {!! Form::text('tipo', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('operacion', 'Operacion') !!}
    {!! Form::text('operacion', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('ubicacion', 'Ubicacion') !!}
    {!! Form::text('ubicacion', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('imagen', 'Foto') !!}
    {!! Form::open(array('imagen'=>'create', 'method'=>'POST', 'files'=>true, 'url'=>'images')) !!}
    {!! Form::file('imagen', null, ['class' => 'form-control']) !!}
</div>



<div class="form-group">
    {!! Form::label('description', 'Descripción del inmueble') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    
    {!! Form::submit('Guardar', null, ['class' => 'btn btn-sm btn-primary']) !!}
</div>