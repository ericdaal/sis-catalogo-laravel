<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class mantenimientoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index() {
        return view('mantenimiento');
    }

    public function store(Request $request) {
        $this->validate($request,[
            'codigo' => 'required|unique:products',
            'name' => 'required|unique:products',
            'price' => 'required',
            'brand' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('uploads'), $imageName);
        //dd($request->input('id'));
        $request->request->add(['codigo' => Str::slug($request->get('codigo'))]);
        //$request->request->add(['name' => Str::slug($request->get('name'))]);
             
        Product::create([
            'codigo' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'brand' => $request->brand,
            'description' => $request->description,
            'image' => $imageName,
        ]);
    }
}
