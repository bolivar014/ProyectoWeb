@extends('layouts.app')
    @section('content')
        <div class="container container-fluid" style="border: 1px solid gray; border-radius: 10px;"> 
            <h1 class="display-4 text-center">Tabla de Productos...</h1>
            <form action="{{ url('/product') }}" method="post">
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">Código</label>
                        <input type="text" class="form-control" id="code_product" name="code_product" placeholder="Código">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="nombre">
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="">Descripción</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="Descripción">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">Cantidad</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Cantidad">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Precio</label>
                        <input type="number" class="form-control" step="0.2" id="price" name="price" placeholder="Precio">
                    </div>
                </div>
                
                <div class="row" style="margin-bottom: 20px;">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Registrar Producto</button>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ url('/product/index') }}" class="btn btn-danger btn-lg btn-block">Regresar</a>
                    </div>
                </div>
            </form>
                    
        </div>
    @endsection