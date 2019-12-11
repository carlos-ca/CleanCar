@extends('adminlte::Layouts.app')
    @section('main-content')
    <div class="container">
        <div class="row">            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Agregar Usuarios</div>
                    <div class="card-body">
                        <a href="{{ url('/usuario/create') }}" class="btn btn-info" title="Add New Usuario">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/usuario') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
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
                                        <th>#</th><th>Nombre</th><th>Correo</th><th>Sexo</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($usuario as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nombre }}</td><td>{{ $item->correo }}</td><td>{{ $item->sexo }}</td>
                                        <td>
                                            <a href="{{ url('/usuario/' . $item->id) }}" title="Detalles Usuario"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Detalles</button></a>
                                            <a href="{{ url('/usuario/' . $item->id . '/edit') }}" title="Editar Usuario"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                                            <form method="POST" action="{{ url('/usuario' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Borrar Usuario" onclick="return confirm(&quot;Confirm delete?&quot;")><i class="fa fa-trash-o" aria-hidden="true"></i> Borrar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $usuario->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
