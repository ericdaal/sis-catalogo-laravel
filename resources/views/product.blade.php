@extends('layouts.plantilla')
@section('titulo')
    Mantenimiento de Productos
@endsection

@section('contenido')
    <div >
        <form class="md:flex md:justify-center md:gap-10 md:items-center" action="{{ route('product') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
                <div class="mb-5">
                    <label id="id" class="mb-2 block uppercase text-gray-500 font-bold">
                        Codigo del producto
                    </label>
                    <input id="id" name="id" type="text" placeholder="Códgo del producto" class="border p-3 w-full rounded-lg
                    @error('id')
                    border-red-500    
                @enderror"
                value={{ old('id')}}>
                @error('id')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
                </div>
                <div class="mb-5">
                    <label id="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input id="name" name="name" type="text" placeholder="Tu producto" class="border p-3 w-full rounded-lg
                    @error('name')
                    border-red-500    
                @enderror"
                value={{ old('name')}}>
                @error('name')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
                </div>
                <div class="mb-5">
                    <label id="price" class="mb-2 block uppercase text-gray-500 font-bold">
                        Precio
                    </label>
                    <input id="price" name="price" type="text" placeholder="Precio del producto" class="border p-3 w-full rounded-lg
                    @error('price')
                    border-red-500    
                @enderror"
                value={{ old('price')}}>
                @error('price')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
                </div>
                <div class="mb-5">
                    <label id="brand" class="mb-2 block uppercase text-gray-500 font-bold">
                        Marca
                    </label>
                    <input id="brand" name="brand" type="text" placeholder="Marca del producto" class="border p-3 w-full rounded-lg
                    @error('brand')
                    border-red-500    
                @enderror"
                value={{ old('brand')}}>
                @error('brand')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
                </div>
                <div class="mb-5">
                    <label id="description" class="mb-2 block uppercase text-gray-500 font-bold">
                        Descripción
                    </label>
                    <input id="description" name="description" type="text" placeholder="Descripción del producto" class="border p-3 w-full rounded-lg
                    @error('description')
                    border-red-500    
                @enderror"
                value={{ old('description')}}>
                @error('description')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
                </div>

                <input
                    type="submit"
                    value="Crear Producto"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">

        </div>
    </form>
    </div>
@endsection