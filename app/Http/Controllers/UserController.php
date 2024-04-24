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
    public function create($id)
    {
        $user = User::findOrFail($id);
      return view('user.create', compact('user'));
    }
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'role',
            
        ]);

        
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),  
            'role' => $validatedData['role'],        
        ]);

        return redirect()->route('user')->with('success', 'Usuário criado com sucesso!');
    }
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
            'role' => 'required|in:student,teacher,administrator',
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
        ]);

        return redirect()->route('user')->with('success', 'Usuário atualizado com sucesso.');
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user')->with('success', 'Usuário excluído com sucesso.');
    }
}
