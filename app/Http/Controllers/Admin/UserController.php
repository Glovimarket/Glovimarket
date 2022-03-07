<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Rol;

class UserController extends Controller
{
    #Posteriormente esta funcion ira en el controlador de admin, aqui es solo de prueba

    public function index(){
        $users = User::all();

        return view('admin.users.index', compact('users'));
    }

    public function create(){
        $users = User::all();

        return view('admin.users.create', compact('users'));
    }

    public function show($id){

        $user = User::find($id);
        $rols = Rol::all();

        return view('admin.users.show', compact('user', 'rols'));
    }

    public function store(Request $request){
        $user = new User();
        
        $user->create($request->all());

        return redirect()->route('admin.users.index');
    }

    public function edit(User $id)
    {
        return view('admin.users.edit', compact('id'));
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());

        return redirect()->route('admin.users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('admin.user.index');
    }

}
