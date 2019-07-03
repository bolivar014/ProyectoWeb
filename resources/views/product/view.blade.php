@extends('layouts.app')
    @section('content')
        <div class="container">
            <div class="row">
                <div class="card ml-auto mr-auto">
                    <h1 class="display-4 text-center">
                        Producto: <strong> {{$products->name }} </strong>
                    </h1>
                    
                    <img src="http://lorempixel.com/250/250?1" class="card-img-top" alt="..." height="250px">
                    <div class="card-body">
                        <h5 class="card-title">Producto: {{$products->name }}</h5>
                        <p class="card-text"><strong>Descripción:</strong> {{ $products->description }}. </p>
                        <p class="card-text"><small class="text-muted">Fecha Post: {{ $products->updated_at }}</small></p>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                        <div class="col-6">
                                <a href="{{ url('/product/'.$products->id.'/edit') }}" class="btn btn-primary btn-lg btn-block">Editar</a>
                            </div>
                            <div class="col-6">
                                <a href="{{ url('/product/index') }}" class="btn btn-danger btn-lg btn-block">Regresar</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    @endsection
