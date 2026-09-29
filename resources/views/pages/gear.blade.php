@extends('layouts.app')

@section('title', 'Gear y Protecciones')

@section('content')
<div class="container mx-auto px-6 py-12">
    <div class="flex justify-between items-center mb-8 border-b border-gray-700 pb-4">
        <h1 class="text-4xl font-extrabold text-white uppercase tracking-wide">Gear y Táctico</h1>
        <a href="{{ route('home') }}" class="text-gray-400 hover:text-white transition">&larr; Volver a la base</a>
    </div>

    <!-- Catálogo de Gear -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        
        <!-- Producto 1 -->
        <div class="bg-gray-800 rounded-lg overflow-hidden border border-gray-700 shadow-lg transition transform hover:-translate-y-1">
            <img src="{{ asset('img/chaleco.jpg') }}" alt="Chaleco" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-bold mb-2 text-white">Chaleco Táctico JPC Multicam</h3>
                <p class="text-gray-400 text-sm mb-4">Ligero, transpirable e incluye pouches integrados para 3 cargadores de M4.</p>
                <div class="flex justify-between items-center mt-4">
                    <span class="text-2xl font-bold text-red-500">65,00€</span>
                    <button class="bg-gray-700 hover:bg-gray-600 text-white py-2 px-4 rounded transition">Ver Detalles</button>
                </div>
            </div>
        </div>

        <!-- Producto 2 -->
        <div class="bg-gray-800 rounded-lg overflow-hidden border border-gray-700 shadow-lg transition transform hover:-translate-y-1">
            <img src="{{ asset('img/casco.jpg') }}" alt="Casco" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-bold mb-2 text-white">Casco FAST con Raíles</h3>
                <p class="text-gray-400 text-sm mb-4">Protección contra impactos con montura NVG y velcros para parches.</p>
                <div class="flex justify-between items-center mt-4">
                    <span class="text-2xl font-bold text-red-500">45,50€</span>
                    <button class="bg-gray-700 hover:bg-gray-600 text-white py-2 px-4 rounded transition">Ver Detalles</button>
                </div>
            </div>
        </div>

        <!-- Producto 3 -->
        <div class="bg-gray-800 rounded-lg overflow-hidden border border-gray-700 shadow-lg transition transform hover:-translate-y-1">
            <img src="{{ asset('img/gafas.jpg') }}" alt="Gafas" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-bold mb-2 text-white">Gafas Balísticas X800</h3>
                <p class="text-gray-400 text-sm mb-4">Homologadas STANAG. Sistema antivaho avanzado y cristal transparente.</p>
                <div class="flex justify-between items-center mt-4">
                    <span class="text-2xl font-bold text-red-500">32,90€</span>
                    <button class="bg-gray-700 hover:bg-gray-600 text-white py-2 px-4 rounded transition">Ver Detalles</button>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection