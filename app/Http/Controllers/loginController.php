<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function store(Request $request) {
        //dd($request->get('username'));
        $this->validate($request,[
            'name' => 'required',
            'password' => 'required',
        ]);

        if(!auth()->attempt($request->only('name', 'password'))){
            return back()->with('mensaje', 'Credenciales Incorrectas');
        }

        return redirect()->route('panel');
    }

    public function test(Request $request)
    {
        return response()->json(['Mensaje'], 200);
    }
}
