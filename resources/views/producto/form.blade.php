<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($producto->nombre) ? $producto->nombre : ''}}" required>
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('precio') ? 'has-error' : ''}}">
    <label for="precio" class="control-label">{{ 'Precio' }}</label>
    <input class="form-control" name="precio" type="number" id="precio" value="{{ isset($producto->precio) ? $producto->precio : ''}}" required>
    {!! $errors->first('precio', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('piezas') ? 'has-error' : ''}}">
    <label for="piezas" class="control-label">{{ 'Piezas' }}</label>
    <input class="form-control" name="piezas" type="number" id="piezas" value="{{ isset($producto->piezas) ? $producto->piezas : ''}}" required>
    {!! $errors->first('piezas', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
