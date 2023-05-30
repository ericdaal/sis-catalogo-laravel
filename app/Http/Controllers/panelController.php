<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class panelController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index() {
        $productos = Product::all();
        return view('panel', compact('productos'))->render();
        return new Response($view, 200);    
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
    }

        /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return $id;
    }

        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $producto = Product::find($request->id);
        $producto->code = $request->code; 
        $producto->name = $request->name; 
        $producto->price = $request->price; 
        $producto->brand = $request->brand; 
        $producto->description = $request->description; 
        $producto->save();

        return redirect()->route('panel');
    }

        /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Product::find($id);
        $producto->delete();

        return redirect()->route('panel');
    }
}
