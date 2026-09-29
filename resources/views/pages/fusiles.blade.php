@extends('layouts.app')

@section('title', 'Fusiles de Asalto')

@section('content')
<div class="container mx-auto px-6 py-12">
    <div class="flex justify-between items-center mb-8 border-b border-gray-700 pb-4">
        <h1 class="text-4xl font-extrabold text-white uppercase tracking-wide">Fusiles de Asalto AEG</h1>
        <a href="{{ route('home') }}" class="text-gray-400 hover:text-white transition">&larr; Volver a la base</a>
    </div>

    <!-- Catálogo de Fusiles -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        
        <!-- Producto 1 -->
        <div class="bg-gray-800 rounded-lg overflow-hidden border border-gray-700 shadow-lg transition transform hover:-translate-y-1">
            <img src="{{ asset('img/m4a1.jpg') }}" alt="M4A1" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-bold mb-2 text-white">M4A1 Tactical Carbine</h3>
                <p class="text-gray-400 text-sm mb-4">Cuerpo de polímero reforzado, gearbox V2 metálico. Ideal para empezar.</p>
                <div class="flex justify-between items-center mt-4">
                    <span class="text-2xl font-bold text-red-500">149,90€</span>
                    <button class="bg-gray-700 hover:bg-gray-600 text-white py-2 px-4 rounded transition">Ver Detalles</button>
                </div>
            </div>
        </div>

        <!-- Producto 2 -->
        <div class="bg-gray-800 rounded-lg overflow-hidden border border-gray-700 shadow-lg transition transform hover:-translate-y-1">
            <img src="{{ asset('img/ak47.jpg') }}" alt="AK47" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-bold mb-2 text-white">AK-47 Spetsnaz</h3>
                <p class="text-gray-400 text-sm mb-4">Diseño compacto para CQB, acabados en madera sintética y metal.</p>
                <div class="flex justify-between items-center mt-4">
                    <span class="text-2xl font-bold text-red-500">135,00€</span>
                    <button class="bg-gray-700 hover:bg-gray-600 text-white py-2 px-4 rounded transition">Ver Detalles</button>
                </div>
            </div>
        </div>

        <!-- Producto 3 -->
        <div class="bg-gray-800 rounded-lg overflow-hidden border border-gray-700 shadow-lg transition transform hover:-translate-y-1">
            <img src="{{ asset('img/g36c.jpg') }}" alt="G36C" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-bold mb-2 text-white">G36C Pro Series</h3>
                <p class="text-gray-400 text-sm mb-4">Alta cadencia de tiro, culata plegable y raíles Picatinny integrados.</p>
                <div class="flex justify-between items-center mt-4">
                    <span class="text-2xl font-bold text-red-500">189,50€</span>
                    <button class="bg-gray-700 hover:bg-gray-600 text-white py-2 px-4 rounded transition">Ver Detalles</button>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection