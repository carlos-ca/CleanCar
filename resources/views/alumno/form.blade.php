<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($alumno->nombre) ? $alumno->nombre : ''}}" required>
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
    <label for="descripcion" class="control-label">{{ 'Descripcion' }}</label>
    <textarea class="form-control" rows="5" name="descripcion" type="textarea" id="descripcion" >{{ isset($alumno->descripcion) ? $alumno->descripcion : ''}}</textarea>
    {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('grupo_id') ? 'has-error' : ''}}">
    <label for="grupo_id" class="control-label">{{ 'Grupo Id' }}</label>
    <select class="form-control" name="grupo_id" id="grupo_id" >
    @foreach($grupos as $g)
    <option value ="{{$g->id}}"

        @if(isset($alumno->grupo_id) && $alumno->grupo_id==$g->id)
         selected 
         @endif
        >
    {{$g->nombre}}
    </option>
    @endforeach
    </select>
    {!! $errors->first('grupo_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
