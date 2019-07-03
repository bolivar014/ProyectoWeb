@extends('layouts.app')
    @section('content')
        <div class="container container-fluid" style="border: 1px solid gray; border-radius: 10px;"> 
            <h1 class="display-4 text-center">Tabla de Productos...</h1>
            <form action="{{ url('/product') }}" method="post">
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group col-md-6 @if($errors->has('code_product')) has-danger @endif">
                        <label for="">Código</label>
                        <input type="text" class="form-control" id="code_product" name="code_product" placeholder="Código">
                        @if($errors->has('code_product'))
                            @foreach($errors->get('code_product') as $error)
                                <div class="form-control-feedback">
                                    {{ $error }}
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group col-md-6 @if($errors->has('name')) has-danger @endif">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="nombre">
                        @if($errors->has('name'))
                            @foreach($errors->get('name') as $error)
                                <div class="form-control-feedback">
                                    {{ $error }}
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group col-md-12 @if($errors->has('description')) has-danger @endif">
                        <label for="">Descripción</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="Descripción">
                        @if($errors->has('description'))
                            @foreach($errors->get('description') as $error)
                                <div class="form-control-feedback">
                                    {{ $error }}
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6 @if($errors->has('quantity')) has-danger @endif">
                        <label for="">Cantidad</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Cantidad">
                        @if($errors->has('quantity'))
                            @foreach($errors->get('quantity') as $error)
                                <div class="form-control-feedback">
                                    {{ $error }}
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group col-md-6 @if($errors->has('price')) has-danger @endif">
                        <label for="">Precio</label>
                        <input type="number" class="form-control" step="0.2" id="price" name="price" placeholder="Precio">
                        @if($errors->has('price'))
                            @foreach($errors->get('price') as $error)
                                <div class="form-control-feedback">
                                    {{ $error }}
                                </div>
                            @endforeach
                        @endif
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