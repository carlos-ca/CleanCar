@extends('adminlte::Layouts.app')
    @section('main-content')
    <div class="container">
        <div class="row">         

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Proveedor {{ $proveedor->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/proveedor') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/proveedor/' . $proveedor->id . '/edit') }}" title="Edit Proveedor"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('proveedor' . '/' . $proveedor->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Proveedor" onclick="return confirm(&quot;Confirm delete?&quot;")><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $proveedor->id }}</td>
                                    </tr>
                                    <tr><th> Marca </th><td> {{ $proveedor->marca }} </td></tr><tr><th> Fecha de Entrada </th><td> {{ $proveedor->fecha }} </td></tr><tr><tr><th> Telefono </th><td> {{ $proveedor->telefono }} </td></tr><tr><th> Correo </th><td> {{ $proveedor->correo }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
