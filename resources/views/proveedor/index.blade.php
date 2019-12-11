@extends('adminlte::Layouts.app')
    @section('main-content')
    <div class="container">
        <div class="row">            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Proveedores</div>
                    <div class="card-body">
                        <a href="{{ url('/proveedor/create') }}" class="btn btn-info" title="Add New Proveedor">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/proveedor') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>#</th><th>Marca</th><th>Fecha de entrada</th><th>Telefono</th><th>Correo</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($proveedor as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->marca }}</td><td>{{ $item->fecha }}</td><td>{{ $item->telefono }}</td><td>{{ $item->correo }}</td>
                                            <a href="{{ url('/proveedor/' . $item->id) }}" title="View Proveedor"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/proveedor/' . $item->id . '/edit') }}" title="Edit Proveedor"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/proveedor' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Proveedor" onclick="return confirm(&quot;Confirm delete?&quot;")><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $proveedor->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
