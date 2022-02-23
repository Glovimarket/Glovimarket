<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
        #Posteriormente esta funcion ira en el controlador de admin, aqui es solo de prueba
    
        public function index(){
            $roles = Rol::all();
    
            return view('rols.index', compact('roles'));
        }
    
}
