<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Income;

class IncomeController extends Controller
{
    #Posteriormente esta funcion ira en el controlador de admin, aqui es solo de prueba

    public function index(){
        $incomes = Income::all();

        return view('incomes.index', compact('incomes'));
    }

    public function create(){
        $income = Income::all();

        return view('incomes.create', compact('income'));
    }

    public function show($id){

        $income = Income::find($id);

        return view('incomes.mi-perfil', compact('income'));
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
        return view('incomes.edit', compact('id'));
    }

    public function update(Request $request, Income $income)
    {
        $income->users_id = $request->users_id;
        $income->products_id = $request->products_id;
        $income->amount_products = $request->amount_products;
        $income->value = $request->value;
        $income->date = $request->date;

        $income->save();
        return view('incomes.mi-perfil', compact('income'));

        return $income;
    }

    public function destroy(Income $income)
    {
        $income->delete();

        return redirect()->route('incomes.index');
    }
}
