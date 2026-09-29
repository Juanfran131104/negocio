@extends('layouts.app')

@section('title', 'Pistolas Secundarias')

@section('content')
<div class="container mx-auto px-6 py-12">
    <div class="flex justify-between items-center mb-8 border-b border-gray-700 pb-4">
        <h1 class="text-4xl font-extrabold text-white uppercase tracking-wide">Pistolas GBB / CO2</h1>
        <a href="{{ route('home') }}" class="text-gray-400 hover:text-white transition">&larr; Volver a la base</a>
    </div>

    <!-- Catálogo de Pistolas -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        
        <!-- Producto 1 -->
        <div class="bg-gray-800 rounded-lg overflow-hidden border border-gray-700 shadow-lg transition transform hover:-translate-y-1">
            <img src="{{ asset('img/glock.jpg') }}" alt="Glock 17" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-bold mb-2 text-white">G-17 Gen4 Gas</h3>
                <p class="text-gray-400 text-sm mb-4">Retroceso realista (Blowback), corredera metálica y hop-up ajustable.</p>
                <div class="flex justify-between items-center mt-4">
                    <span class="text-2xl font-bold text-red-500">120,00€</span>
                    <button class="bg-gray-700 hover:bg-gray-600 text-white py-2 px-4 rounded transition">Ver Detalles</button>
                </div>
            </div>
        </div>

        <!-- Producto 2 -->
        <div class="bg-gray-800 rounded-lg overflow-hidden border border-gray-700 shadow-lg transition transform hover:-translate-y-1">
            <img src="{{ asset('img/hicapa.jpg') }}" alt="Hi-Capa" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-bold mb-2 text-white">Hi-Capa 5.1 Custom</h3>
                <p class="text-gray-400 text-sm mb-4">La favorita para recorridos de tiro. Gran capacidad de gas y precisión.</p>
                <div class="flex justify-between items-center mt-4">
                    <span class="text-2xl font-bold text-red-500">145,90€</span>
                    <button class="bg-gray-700 hover:bg-gray-600 text-white py-2 px-4 rounded transition">Ver Detalles</button>
                </div>
            </div>
        </div>

        <!-- Producto 3 -->
        <div class="bg-gray-800 rounded-lg overflow-hidden border border-gray-700 shadow-lg transition transform hover:-translate-y-1">
            <img src="{{ asset('img/1911.jpg') }}" alt="1911" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-bold mb-2 text-white">1911 Clásica CO2</h3>
                <p class="text-gray-400 text-sm mb-4">Potencia constante incluso en invierno gracias a sus cápsulas de CO2.</p>
                <div class="flex justify-between items-center mt-4">
                    <span class="text-2xl font-bold text-red-500">99,00€</span>
                    <button class="bg-gray-700 hover:bg-gray-600 text-white py-2 px-4 rounded transition">Ver Detalles</button>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection