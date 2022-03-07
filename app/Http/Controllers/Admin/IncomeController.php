<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Income;
use App\Models\Supplier;
use App\Models\Products;

class IncomeController extends Controller
{
    #Posteriormente esta funcion ira en el controlador de admin, aqui es solo de prueba

    public function index(){
        $incomes = Income::all();
        $i = 0;
        foreach ($incomes as $valor) {
            
            $supplier = Supplier::find($incomes[$i]->supplier_id);
            $incomes[$i]->supplier_id = $supplier->name;
            $product = Products::find($incomes[$i]->products_id);
            $incomes[$i]->products_id = $product->name;
            $i = $i + 1;
        }

        return view('admin.incomes.index', compact('incomes'));
    }

    public function create(){
        $income = Income::all();

        return view('admin.incomes.create', compact('income'));
    }

    public function show($id){

        $income = Income::find($id);

        $i = 0;            
            $supplier = Supplier::find($income->supplier_id);
            $suppliers = Supplier::all();
            $products = Products::all();
            $income->supplier_id = $supplier->name;
            $product = Products::find($income->products_id);
            $income->products_id = $product->name;
            $i = $i + 1;


        return view('admin.incomes.show', compact('income', 'suppliers', 'products'));
    }


    public function store(Request $request){
        $income = new Income();
        
        $income->users_id = $request->users_id;
        $income->products_id = $request->products_id;
        $income->amount_products = $request->amount_products;
        $income->value = $request->value;
        $income->date = $request->date;

        $income->save();

        return redirect()->route('incomes.index');
    }

    public function edit(Income $id)
    {
        return view('admin.incomes.edit', compact('income', 'suppliers', 'products'));
    }

    public function update(Request $request, Income $income)
    {
        $income->users_id = $income->users_id;
        $income->supplier_id = $request->supplier_id;
        $income->products_id = $request->products_id;
        $income->amount_products = $request->amount_products;
        $income->value = $request->value;
        $income->date = $request->date;

        $income->save();
        return redirect()->route('admin.incomes.index');
    }

    public function destroy(Income $income)
    {
        $income->delete();

        return redirect()->route('incomes.index');
    }
}
