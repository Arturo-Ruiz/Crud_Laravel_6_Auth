<div class="form-group">
    {!! Form::label('name', 'Nombre del Producto') !!}
    {!! Form::text('name', null, ['class'=>'form-control'])  !!}
</div>
<div class="form-group">
    {!! Form::label('short', 'Descripcion Breve del Producto') !!}
    {!! Form::text('short', null, ['class'=>'form-control'])  !!}
</div>
<div class="form-group">
    {!! Form::label('body', 'Descripcion del Producto') !!}
    {!! Form::textarea('body', null, ['class'=>'form-control'])  !!}
</div>
<div class="form-group">
    {!! Form::submit('body', null, ['class'=>'form-control'])  !!}
</div>

