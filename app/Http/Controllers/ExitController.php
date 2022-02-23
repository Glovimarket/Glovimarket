<?php

namespace App\Http\Controllers;

use App\Models\ExitProducts;
use Illuminate\Http\Request;

class ExitController extends Controller
{
    #Posteriormente esta funcion ira en el controlador de admin, aqui es solo de prueba

    public function index(){
        $exits = ExitProducts::all();

        return view('exits.index', compact('exits'));
    }

    public function create(){
        $exit = ExitProducts::all();

        return view('exits.create', compact('exits'));
    }

    public function show($id){

        $exit = ExitProducts::find($id);

        return view('exits.mi-perfil', compact('exit'));
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
        return view('exits.edit', compact('id'));
    }

    public function update(Request $request, ExitProducts $exit)
    {
        $exit->users_id = $request->users_id;
        $exit->products_id = $request->products_id;
        $exit->amount_products = $request->amount_products;
        $exit->value = $request->value;

        $exit->save();
        return view('exits.mi-perfil', compact('exit'));

        return $exit;
    }

    public function destroy(ExitProducts $exit)
    {
        $exit->delete();

        return redirect()->route('exits.index');
    }
}
