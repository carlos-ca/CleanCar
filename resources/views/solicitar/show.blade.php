@extends('adminlte::Layouts.app')
    @section('main-content')
    <div class="container">
        <div class="row">         

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">solicitar {{ $solicitar->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/solicitar') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/solicitar/' . $solicitar->id . '/edit') }}" title="Edit solicitar"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('solicitar' . '/' . $solicitar->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete solicitar" onclick="return confirm(&quot;Confirm delete?&quot;")><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $solicitar->id }}</td>
                                    </tr>
                                    <tr><th> Servicio Solicitado</th><td> {{ $solicitar->servicio }} </td></tr><tr><th> Fecha del Servicio </th><td> {{ $solicitar->f_servicio }} </td></tr><tr><th> Precio </th><td> {{ $solicitar->precio }} </td></tr><tr><th> Marca del Auto </th><td> {{ $solicitar->marca }} </td></tr><tr><th> Matricula </th><td> {{ $solicitar->matricula }} </td></tr><tr><th> Direccion de Entrega </th><td> {{ $solicitar->direccion }} </td></tr><tr><th> Colonia </th><td> {{ $solicitar->colonia }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
