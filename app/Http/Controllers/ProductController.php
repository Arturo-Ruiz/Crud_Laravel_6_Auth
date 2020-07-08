<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests\ProductRequest;
class ProductController extends Controller
{
    public function index(){
        $products = Product::orderBy('id', 'DESC')->paginate();
        return view('products.index', compact('products'));
    }

    public function store(ProductRequest $request){
        return 'Producto Gruadado';
    }

    public function show($id){
        $product = Product::find($id);
        return view('products.show', compact('product'));
    }

    public function update(ProductRequest $request, $id){
        return 'Producto asdee '.$id;
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
