<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Categories;
use App\Models\File;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    #Posteriormente esta funcion ira en el controlador de admin, aqui es solo de prueba

    public function index(){
        $products = Products::all();

        return view('products.index', compact('products'));
    }

    public function create(){
        $categories = Categories::all();

        return view('products.create', compact('categories'));
    }

    public function show($id){

        $product = Products::find($id);
        $file = File::find($product->file_id);

        return view('products.show', compact('product', 'file'));
    }

    public function store(Request $request){
        $product = new Products();
        
        $product->name = $request->name;
        $product->categories_id = $request->categories_id;
        $product->amount = $request->amount;
        $product->value = $request->value;
        $product->description = $request->description;

        $product->save();

        return redirect()->route('products.index');
    }

    public function edit(Products $id)
    {
        return view('products.edit', compact('id'));
    }

    public function update(Request $request, Products $product)
    {
        $product->name = $request->name;
        $product->amount = $request->amount;
        $product->value = $request->value;
        $product->description = $request->description;

        $product->save();
        return view('products.show', compact('product'));
    }

    public function update_file(Request $request, Products $product)
    {
        $imagen = $request->file('file')->store('public/');

        $url = Storage::url($imagen);

        return $imagen;
    }
    

    public function destroy(Products $product)
    {
        $product->delete();

        return redirect()->route('products.index');
    }
}
