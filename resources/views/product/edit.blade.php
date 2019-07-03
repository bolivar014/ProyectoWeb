@extends('layouts.app')
    @section('content')
        <div class="container container-fluid" style="border: 1px solid gray; border-radius: 10px;"> 
            <h1 class="display-4 text-center">Tabla de Productos...</h1>
            <form action="{{ url('/product/'.$products->id.'/edit') }}" method="post">
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">Código</label>
                        <input type="hidden" class="form-control" id="code_product" name="code_product" value="{{ $products->code_product }}">
                        <input type="text" class="form-control" id="code_product" name="code_product" disabled="false" value="{{ $products->code_product }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Nombre</label>
                        <input type="hidden" class="form-control" id="name" name="name" value="{{ $products->name }}">
                        <input type="text" class="form-control" id="name" name="name" value="{{ $products->name }}" disabled="false">
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="">Descripción</label>
                        <input type="hidden" class="form-control" id="description" name="description" value="{{ $products->description }}">
                        <input type="text" class="form-control" id="description" name="description" value="{{ $products->description }}" disabled="false">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">Cantidad</label>
                        <input type="hidden" class="form-control" id="quantity" name="quantity" value="{{ $products->quantity }}">
                        <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $products->quantity }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Precio</label>
                        <input type="hidden" class="form-control" step="0.2" id="price" name="price" value="{{ $products->price }}">
                        <input type="number" class="form-control" step="0.2" id="price" name="price" value="{{ $products->price }}">
                    </div>
                </div>
                
                <div class="row" style="margin-bottom: 20px;">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar Cambios</button>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ url('/product/index') }}" class="btn btn-danger btn-lg btn-block">Regresar</a>
                    </div>
                </div>
            </form>
                    
        </div>
    @endsection