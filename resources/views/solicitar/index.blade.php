@extends('adminlte::Layouts.app')
    @section('main-content')
    <div class="container">
        <div class="row">            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Registro de Servicios Solicitados</div>
                    <div class="card-body">
                        <a href="{{ url('/solicitar/create') }}" class="btn btn-info btn-sm" title="Añadir Nuevo Servicio">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/solicitar') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button type="button" class="btn btn-info" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Servicio Solicitado</th><th>Fecha del Servicio</th><th>Precio</th><th>Marca del Auto</th><th>Matricula</th><th>Dirección de Entrega</th><th>Colonia</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($solicitar as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->servicio }}</td><td>{{ $item->f_servicio }}</td><td>{{ $item->precio }}</td><td>{{ $item->marca }}</td><td>{{ $item->matricula }}</td><td>{{ $item->direccion }}</td><td>{{ $item->colonia }}</td>
                                        <td>
                                            <a href="{{ url('/solicitar/' . $item->id) }}" title="View solicitar"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/solicitar/' . $item->id . '/edit') }}" title="Edit solicitar"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/solicitar' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete solicitar" onclick="return confirm(&quot;Confirm delete?&quot;")><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $solicitar->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
