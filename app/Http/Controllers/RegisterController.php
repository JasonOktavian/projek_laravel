<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'register',
            'active' => 'register'
        ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|alpha|max:25',
            'username' => 'required|unique:users|min:5|max:25',
            'email' => 'required|email:dns|unique:users|max:25',
            'password' => 'required|min:8|max:50',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        //Sama aja pake bcrypt bedanya ini syntax laravel
        // $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        // $request->session()->flash('success', 'Registration was successful! Please Login!');
        return redirect('/login')->with('success', 'Registration was successful! Please Login!');
    }
}
