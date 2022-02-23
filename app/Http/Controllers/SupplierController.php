<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    #Posteriormente esta funcion ira en el controlador de admin, aqui es solo de prueba

    public function index(){
        $suppliers = Supplier::all();

        return view('suppliers.index', compact('suppliers'));
    }

    public function create(){
        $suppliers = Supplier::all();

        return view('suppliers.create', compact('suppliers'));
    }

    public function show($id){

        $supplier = Supplier::find($id);

        return view('suppliers.mi-perfil', compact('supplier'));
    }

    public function store(Request $request){
        $supplier = new Supplier();
        
        $supplier->first_name = $request->first_name;
        $supplier->second_name = $request->second_name;
        $supplier->last_name = $request->last_name;
        $supplier->second_surname = $request->second_surname;
        $supplier->telephone = $request->telephone;
        $supplier->direction = $request->direction;
        $supplier->email = $request->email;

        $supplier->save();

        return redirect()->route('supplier.index');
    }

    public function edit(Supplier $id)
    {
        return view('suppliers.edit', compact('id'));
    }

    public function update(Request $request, Supplier $supplier)
    {
        $supplier->first_name = $request->first_name;
        $supplier->second_name = $request->second_name;
        $supplier->last_name = $request->last_name;
        $supplier->second_surname = $request->second_surname;
        $supplier->telephone = $request->telephone;
        $supplier->direction = $request->direction;
        $supplier->email = $request->email;
        $supplier->password = $request->password;

        $supplier->save();
        return view('suppliers.mi-perfil', compact('supplier'));
    }

    public function destroy(Supplier $supplier)
    {
        $supplier->delete();

        return redirect()->route('supplier.index');
    }
}
