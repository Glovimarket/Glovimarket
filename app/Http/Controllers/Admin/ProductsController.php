<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Categories;
use Illuminate\Support\Facades\Storage;


class ProductsController extends Controller
{
    #Posteriormente esta funcion ira en el controlador de admin, aqui es solo de prueba

    public function index(){
        $products = Products::all();

        return view('admin.products.index', compact('products'));
    }

    public function create(){
        $categories = Categories::all();

        return view('admin.products.create', compact('categories'));
    }

    public function show($id){

        $product = Products::find($id);
        $categories = Categories::all();

        return view('admin.products.show', compact('product', 'categories'));
    }

    public function store(Request $request){
        $product = new Products();
        
        $product->name = $request->name;
        $product->categories_id = $request->categories_id;
        $product->amount = $request->amount;
        $product->price = $request->price;
        $product->description = $request->description;

        $product->save();

        return redirect()->route('admin.products.index');
    }

    public function edit(Products $id)
    {
        return view('admin.products.edit', compact('id'));
    }

    public function update(Request $request, Products $product)
    {
        $product->name = $request->name;
        $product->amount = $request->amount;
        $product->price = $request->price;
        $product->description = $request->description;

        $product->save();
        return view('admin.products.show', compact('product'));
    }

    public function storage_file(Request $request)
    {
        $imagenes = $request->file('url')->store('/public');

        $url = Storage::url($imagenes);

        $product = Products::find($request->id);
        $request->url = $url;
        $product->name = $request->name;
        $product->amount = $request->amount;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->categories_id = $request->categories_id;
        $product->url = $request->url;

        $product->save();
        return redirect()->route('admin.products.index');
        #return view('admin.products.show', compact('product'));

        return $request;
    }
    

    public function destroy(Products $product)
    {
        $product->delete();

        return redirect()->route('admin.products.index');
    }
}
