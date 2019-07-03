<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::paginate(20);
        return view('product.index')->with(compact('products'));
    }

    //
    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->code_product = $request->input('code_product');
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->quantity = $request->input('quantity');
        $product->price = $request->input('price');
        $product->save(); // Guardamos Registro
        
        $products = Product::paginate(20); // Cargamos nuevo Registro

        $notification = 'Producto almacenado Exitosamente';
        
        return view('product.index')->with(compact(['notification','products']));
    }
}
