<?php

namespace App\Http\Controllers;

use App\Models\ExitProducts;
use Illuminate\Http\Request;

class SellerExitController extends Controller
{
    #Posteriormente esta funcion ira en el controlador de admin, aqui es solo de prueba

    public function index(){
        $exits = ExitProducts::all();

        return view('seller.seller_exits.index', compact('exits'));
    }

   

    public function show($id){

        $exit = ExitProducts::find($id);

        return view('seller.seller_exits.mi-perfil', compact('exit'));
    }

    
}
