<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    #Posteriormente esta funcion ira en el controlador de admin, aqui es solo de prueba

    public function index(){
        $users = User::all();

        return view('users.usuarios', compact('users'));
    }

    public function create(){
        $users = User::all();

        return view('users.create', compact('users'));
    }

    public function show($id){

        $user = User::find($id);

        return view('users.mi-perfil', compact('user'));
    }

    public function store(Request $request){
        $user = new User();
        
        $user->first_name = $request->first_name;
        $user->second_name = $request->second_name;
        $user->last_name = $request->last_name;
        $user->second_surname = $request->second_surname;
        $user->telephone = $request->telephone;
        $user->direction = $request->direction;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();

        return redirect()->route('users.usuarios');
    }

    public function edit(User $id)
    {
        return view('users.edit', compact('id'));
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());

        return view('users.mi-perfil', compact('user'));
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('user.index');
    }

    public function signup(){
        return view('users.sign-up');
    }
}
