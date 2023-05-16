<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class registroController extends Controller
{
    public function index()
    {
        return view('registro');
    }
    public function store(Request $request)
    {
        $request->request->add(['name' => Str::slug($request->name)]);

        $this->validate($request,[
            'name' => 'required|unique:users',
            'email' => 'required|unique:users|email',
            'password' => 'required|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        auth()->attempt($request->only('name','password'));
        return redirect()->route('mantenimiento');
    }
}