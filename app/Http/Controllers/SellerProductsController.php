<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Categories;
use App\Models\File;
use Illuminate\Http\Request;

class SellerProductsController extends Controller
{
    #Posteriormente esta funcion ira en el controlador de admin, aqui es solo de prueba

    public function index(){
        $products = Products::all();

        return view('seller.seller_products.index', compact('products'));
    }


    public function show($id){

        $product = Products::find($id);
        $file = File::find($product->file_id);

        return view('seller.seller_products.show', compact('product', 'file'));
    }

 
    


}
