<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        // $products = Product::orderBy('id', 'DESC')->paginate();
        // $products = Product::where('name', 'S')->orderBy('name', 'desc')->paginate(5);
        $products = Product::orderBy('id', 'DESC')->paginate(8  );
        return view('products.index', compact('products'));
    }

    public function store(ProductRequest $request){

        $product = new Product;
        $product->name  =  $request->name;
        $product->short =  $request->short;
        $product->body  =  $request->body;

        $product->save();
        return redirect()->route('products.index')->with('info', 'El Producto Fue Creado Correctamente');

    }

    public function show($id){
        $product = Product::find($id);
        return view('products.show', compact('product'));
    }

    public function update(ProductRequest $request, $id){
        $product = Product::find($id);
        $product->name  =  $request->name;
        $product->short =  $request->short;
        $product->body  =  $request->body;

        $product->save();
        return redirect()->route('products.index')->with('info', 'El Producto Fue Actualizado');

    }

    public function destroy($id){
        $product = Product::find($id);
        $product->delete();
        return back()->with('info', 'El producto Fue Eliminado');
    }

    public function edit($id){
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }
    public function create(){
        return view('products.create');
    }
}
