<div class="form-group {{ $errors->has('servicio') ? 'has-error' : ''}}">
    <label for="servicio" class="control-label">{{ 'Servicio Solicitado' }}</label>
    <input class="form-control" name="servicio" type="text" id="marca" value="{{ isset($solicitar->servicio) ? $solicitar->servicio : ''}}" required>
    {!! $errors->first('servicio', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group {{ $errors->has('f_servicio') ? 'has-error' : ''}}">
    <label for="f_servicio" class="control-label">{{ 'Fecha de Solicitud' }}</label>
    <input class="form-control" name="f_servicio" type="text and number" id="f_servicio" value="{{ isset($solicitar->f_servicio) ? $solicitar->f_servicio : ''}}" required>
    {!! $errors->first('f_servicio', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group {{ $errors->has('precio') ? 'has-error' : ''}}">
    <label for="precio" class="control-label">{{ 'Precio' }}</label>
    <input class="form-control" name="precio" type="text and number" id="precio" value="{{ isset($solicitar->precio) ? $solicitar->precio : ''}}" required>
    {!! $errors->first('precio', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('marca') ? 'has-error' : ''}}">
    <label for="marca" class="control-label">{{ 'Marca del Auto' }}</label>
    <input class="form-control" name="marca" type="text and number" id="marca" value="{{ isset($solicitar->marca) ? $solicitar->marca : ''}}" required>
    {!! $errors->first('marca', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('matricula') ? 'has-error' : ''}}">
    <label for="matricula" class="control-label">{{ 'Matricula' }}</label>
    <input class="form-control" name="matricula" type="text and number" id="matricula" value="{{ isset($solicitar->matricula) ? $solicitar->matricula : ''}}" required>
    {!! $errors->first('matricula', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('direccion') ? 'has-error' : ''}}">
    <label for="direccion" class="control-label">{{ 'Dirección' }}</label>
    <input class="form-control" name="direccion" type="text and number" id="direccion" value="{{ isset($solicitar->direccion) ? $solicitar->direccion : ''}}" required>
    {!! $errors->first('direccion', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('colonia') ? 'has-error' : ''}}">
    <label for="colonia" class="control-label">{{ 'Colonia' }}</label>
    <input class="form-control" name="colonia" type="text and number" id="colonia" value="{{ isset($solicitar->colonia) ? $solicitar->colonia : ''}}" required>
    {!! $errors->first('colonia', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
