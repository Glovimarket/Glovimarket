<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class SellerCategoriesController extends Controller
{
    #Posteriormente esta funcion ira en el controlador de admin, aqui es solo de prueba

    public function index(){
        $categories = Categories::all();

        return view('seller.seller_categories.index', compact('categories'));
    }
    public function create(){
        $categories = Categories::all();

        return view('seller.seller_categories.create', compact('categories'));
    }

    public function show($id){

        $category = Categories::find($id);

        return view('seller.seller_categories.mi-perfil', compact('category'));
    }

    public function store(Request $request){
        $category = new Categories();
        
        $category->name = $request->name;

        $category->save();

        return redirect()->route('seller.seller_categories.index');
    }



   

}