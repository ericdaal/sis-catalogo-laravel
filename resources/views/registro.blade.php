@extends('layouts.plantilla')
@section('titulo')
    Crear Usuario
@endsection

@section('contenido')
    <div >
        <form class="md:flex md:justify-center md:gap-10 md:items-center" action="{{ route('registro') }}" method="POST">
            @csrf
            <div class="md:w-5/12 bg-white p-6 rounded-lg shadow-xl">
                <div class="mb-5">
                    <label id="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre del Usuario
                    </label>
                    <input id="name" name="name" type="text" placeholder="Nombre de usuario" class="border p-3 w-full rounded-lg
                    @error('name')
                    border-red-500    
                @enderror"
                value={{ old('name')}}>
                @error('name')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
                </div>
                <div class="mb-5">
                    <label id="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>
                    <input id="email" name="email" type="email" placeholder="Ingresa Email" class="border p-3 w-full rounded-lg
                    @error('email')
                    border-red-500    
                @enderror"
                value={{ old('email')}}>
                @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
                </div>
                <div class="mb-5">
                    <label id="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        Password
                    </label>
                    <input id="password" name="password" type="password" placeholder="Contraseña" class="border p-3 w-full rounded-lg
                    @error('password')
                    border-red-500    
                @enderror"
                value={{ old('password')}}>
                @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
                </div>
                <div class="mb-5">
                    <label id="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                        Repetir-Password
                    </label>
                    <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Repite Contraseña" class="border p-3 w-full rounded-lg
                    @error('password_confirmation')
                    border-red-500    
                @enderror"
                value={{ old('password_confirmation')}}>
                @error('password_confirmation')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
                </div>
                <input
                    type="submit"
                    value="Registrar"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">

        </div>
    </form>
    </div>
@endsection