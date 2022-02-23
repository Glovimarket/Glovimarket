<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;

class SellerIncomeController extends Controller
{
    #Posteriormente esta funcion ira en el controlador de admin, aqui es solo de prueba

    public function index(){
        $incomes = Income::all();

        return view('seller.seller_incomes.index', compact('incomes'));
    }

 

    public function show($id){

        $income = Income::find($id);

        return view('seller.seller_incomes.mi-perfil', compact('income'));
    }


 
}
