@extends('Layout.ecommerce3')
@section ('cuerpo')
<h1>Nuevo registro</h1>
   <form action="{{ route('tarea.guardar') }}" method="POST" name="frm_registro_tarea" enctype= "multipart/form-data">
   @csrf
   <div class="form-group">
   <label for="name" >Nombre</label>
   <input class="form-control" type="text" name="name">
   <label for="description">Description</label>
   <input class="form-control" type="text" name="description">
   <label for="estatus">Estatus</label>
   <input class="form-control" type="text" name="estatus">
   <label for="archivo">Archivo</label>
   <input class="form-control" type="file" name="archivo">
   <button type="submit" class="btn btn-primary">Registrar</button>
   </div>
   </form>
   <br>
   <a href="{{ route('home') }}"  class="btn btn-primary" >Regresar</a>
 
@endsection      
@section ('header')
 @include('partials.header3')
@endsection