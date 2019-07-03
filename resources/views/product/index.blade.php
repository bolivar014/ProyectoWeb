@extends('layouts.app')
    @section('content')
        <div class="container-fluid">        
            <div class="">
                <div class="container" style="border: 1px solid gray; border-radius: 10px;">
                    @if(session('notification'))
                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Felicitaciones</h4>
                            <p class="mb-0">{{ session('notification') }}</p>
                        </div>
                    @endif
                    <h1 class="display-4 text-center">Tabla de Productos...</h1>
                    <p class="lead">A continuación Encontraras una tabla con información Referente a productos.</p>    
                    <a href="{{ url('/product/create') }}" class="btn btn-primary" autocomplete="off" style="margin-bottom: 10px;">
                        Agregar Producto
                    </a>
                    <div class="row">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Código</th>
                                    <th scope="col">Producto</th>
                                    <th scope="col-3" style="text-align: center;">Descripción</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col-2" style="text-align: center;">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($products as $product)
                                    <tr>
                                        <th scope="row">{{ $product->code_product }}</th>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->description }}</td>
                                        <td>{{ $product->quantity }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>
                                            <form action="{{ url('/product/'.$product->id) }}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                
                                                <a href="#" type="button" rel="tooltip" title="Ver Información" class="btn btn-success btn-xs">
                                                    <i class="material-icons">search</i>
                                                </a>
                                                <a href="{{ url('/product/'.$product->id.'/edit') }}" href="#" type="button" rel="tooltip" title="Editar" class="btn btn-info btn-xs">
                                                    <i class="material-icons">border_color</i>
                                                </a>
                                                <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-xs">
                                                    <i class="material-icons">delete_sweep</i>
                                                </button>
                                            </form>
                                            
                                        </td>
                                    </tr>
                                @empty
                                    <h1 class="h2">Lo sentimos, Actualmente no contamos con productos disponibles...</h1>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                      
                    <div class="row">
                        @if(count($products))
                            <div class="mt-2 mx-auto">
                                {{ $products->links('pagination::bootstrap-4') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection