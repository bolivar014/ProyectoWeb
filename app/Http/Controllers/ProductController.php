<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::paginate(15);
        return view('product.index')->with(compact('products'));
    }

    //
    public function create()
    {
        return view('product.create');
    }

    //
    public function store(Request $request)
    {
        $products = new Product();
        $products->code_product = $request->input('code_product');
        $products->name = $request->input('name');
        $products->description = $request->input('description');
        $products->quantity = $request->input('quantity');
        $products->price = $request->input('price');
        $products->save(); // Guardamos Registro
        
        $products = null;
        $products = Product::paginate(15); // Cargamos nuevo Registro

        $notification = 'Producto almacenado Exitosamente';
        
        return view('product.index')->with(compact(['notification','products']));
    }

    //
    public function edit($id)
    {
        $products = Product::find($id);
        return view('product.edit')->with(compact('products'));
    }

    //
    public function update(Request $request, $id)
    {
        $products = Product::find($id);
        $products->code_product = $request->input('code_product');
        $products->name = $request->input('name');
        $products->description = $request->input('description');
        $products->quantity = $request->input('quantity');
        $products->price = $request->input('price');
        $products->save();

        
        $products = Product::paginate(15); // Cargamos nuevo Registro

        $notification = 'Producto almacenado Exitosamente';
        return view('product.index')->with(compact(['notification','products']));
    }

    //
    public function destroy($id)
    {
        $products = Product::find($id);
        $products->delete();
    
        $products = Product::paginate(15); // Cargamos nuevo Registro

        $notification = 'Producto Eliminado Exitosamente';
        return view('product.index')->with(compact(['notification','products']));
    

    }

    //
    public function view($id)
    {
        $products = Product::find($id);
        return view('product.view')->with(compact('products'));
    
    }
}
