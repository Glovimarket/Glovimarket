<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Models\Products;

class SupplierController extends Controller
{
    public function index(){
        $supplier = Supplier::all();
        

        return view('admin.suppliers.index', compact('supplier'));
    }

    public function create(){
        $suppliers = Supplier::all();
        $categories = Products::all();

        return view('admin.suppliers.create', compact('suppliers', 'categories'));
    }

    public function show($id){

        $supplier = Supplier::find($id);
        $products = Products::all();

        return view('admin.suppliers.show', compact('supplier', 'products'));
    }

    public function store(Request $request){
        $supplier = new Supplier();
        
        $supplier->name = $request->name;
        $supplier->name_supplier = $request->name_supplier;
        $supplier->telephone = $request->telephone;
        $supplier->email = $request->email;
        $supplier->products_id = $request->products_id;

        $supplier->save();

        return redirect()->route('admin.suppliers.index');
    }

    public function edit(Supplier $id)
    {
        return view('admin.suppliers.edit', compact('id'));
    }

    public function update(Request $request, Supplier $supplier)
    {
        $supplier->name = $request->name;
        $supplier->name_supplier = $request->name_supplier;
        $supplier->telephone = $request->telephone;
        $supplier->email = $request->email;
        $supplier->products_id = $request->products_id;

        $supplier->save();
        return redirect()->route('admin.suppliers.index');
    }

    public function destroy(Supplier $supplier)
    {
        $supplier->delete();

        return redirect()->route('admin.suppliers.index');
    }
}
