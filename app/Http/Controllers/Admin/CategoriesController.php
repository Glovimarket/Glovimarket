<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    #Posteriormente esta funcion ira en el controlador de admin, aqui es solo de prueba

    public function index(){
        $categories = Categories::all();

        return view('admin.categories.index', compact('categories'));
    }

    public function create(){
        $categories = Categories::all();

        return view('admin.categories.create', compact('categories'));
    }

    public function show($id){

        $category = Categories::find($id);

        return view('admin.categories.show', compact('category'));
    }

    public function store(Request $request){
        $category = new Categories();
        
        $category->name = $request->name;

        $category->save();

        return redirect()->route('admin.categories.index');
    }

    public function edit(Categories $id)
    {
        return view('admin.categories.edit', compact('id'));
    }

    public function update(Request $request, Categories $category)
    {
        $category->name = $request->name;

        $category->save();
        return view('admin.categories.show', compact('category'));
    }

    public function destroy(Categories $category)
    {
        $category->delete();

        return redirect()->route('admin.categories.index');
    }
}
