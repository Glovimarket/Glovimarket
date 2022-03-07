<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ExitProducts;
use App\Models\Product;
use App\Models\User;
use App\Models\Products;

class ExitController extends Controller
{
    #Posteriormente esta funcion ira en el controlador de admin, aqui es solo de prueba

    public function index(){
        $exits = ExitProducts::all();
        $i = 0;
        foreach ($exits as $valor) {
            
            $user = User::find($exits[$i]->users_id);
            $exits[$i]->users_id = $user->name;
            $product = Products::find($exits[$i]->products_id);
            $exits[$i]->products_id = $product->name;
            $i = $i + 1;
        }

        return view('admin.exits.index', compact('exits'));
    }

    public function create(){
        $exit = ExitProducts::all();

        return view('admin.exits.create', compact('exits'));
    }

    public function show($id){

        $exit = ExitProducts::find($id);

        $i = 0;            
            $user = User::find($exit->users_id);
            $users = User::all();
            $products = Products::all();
            $exit->users_id = $user->name;
            $product = Products::find($exit->products_id);
            $exit->products_id = $product->name;
            $i = $i + 1;


        return view('admin.exits.show', compact('exit', 'users', 'products'));
    }

    public function store(Request $request){
        $exit = new ExitProducts();
        
        $exit->users_id = $request->users_id;
        $exit->products_id = $request->products_id;
        $exit->amount_products = $request->amount_products;
        $exit->value = $request->value;

        $exit->save();

        return redirect()->route('exits.index');
    }

    public function edit(ExitProducts $id)
    {
        return view('admin.exits.edit', compact('id'));
    }

    public function update(Request $request, ExitProducts $exit)
    {
        $exit->users_id = $request->users_id;
        $exit->products_id = $request->products_id;
        $exit->amount_products = $request->amount_products;
        $exit->value = $request->value;

        $exit->save();
        return view('admin.exits.show', compact('exit'));

        return $exit;
    }

    public function destroy(ExitProducts $exit)
    {
        $exit->delete();

        return redirect()->route('exits.index');
    }
}
