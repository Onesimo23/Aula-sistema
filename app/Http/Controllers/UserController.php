<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();


      return view('user.index', compact('users'));

    }

    public function description(){
        return view('description');
    }
    public function create()
    {
      return view('user.create');
    }
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            
        ]);

        
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),          
        ]);

        return redirect()->route('user')->with('success', 'Usuário criado com sucesso!');
    }
}
