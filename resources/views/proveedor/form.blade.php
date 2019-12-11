<div class="form-group {{ $errors->has('marca') ? 'has-error' : ''}}">
    <label for="marca" class="control-label">{{ 'Marca' }}</label>
    <input class="form-control" name="marca" type="text" id="marca" value="{{ isset($proveedor->marca) ? $proveedor->marca : ''}}" required>
    {!! $errors->first('marca', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fecha') ? 'has-error' : ''}}">
    <label for="fecha" class="control-label">{{ 'Fecha de Entrada' }}</label>
    <input class="form-control" name="fecha" type="text" id="fecha" value="{{ isset($proveedor->fecha) ? $proveedor->fecha : ''}}" required>
    {!! $errors->first('fecha', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('telefono') ? 'has-error' : ''}}">
    <label for="telefono" class="control-label">{{ 'Teléfono' }}</label>
    <input class="form-control" name="telefono" type="text" id="telefono" value="{{ isset($proveedor->telefono) ? $proveedor->telefono : ''}}" required>
    {!! $errors->first('telefono', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('correo') ? 'has-error' : ''}}">
    <label for="correo" class="control-label">{{ 'Correo' }}</label>
    <input class="form-control" name="correo" type="text" id="correo" value="{{ isset($proveedor->correo) ? $proveedor->correo : ''}}" required>
    {!! $errors->first('correo', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
