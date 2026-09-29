@extends('layouts.app')

@section('title', 'Tu tienda táctica')

@section('content')
<!-- Hero Section -->
<div class="relative bg-black h-96 flex justify-center items-center">
    <!-- Imagen de fondo -->
    <img src="{{ asset('img/fondo.jpg') }}" alt="Fondo Airsoft" class="absolute inset-0 w-full h-full object-cover opacity-40">
    
    <div class="relative z-10 text-center px-4">
        <h1 class="text-5xl font-extrabold text-white mb-4 uppercase tracking-widest text-shadow-md">Domina el Terreno</h1>
        <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">Réplicas, equipamiento táctico y consumibles para jugadores que no aceptan la derrota.</p>
        <a href="{{ route('services') }}" class="bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-8 rounded transition duration-300">
            Ver Catálogo
        </a>
    </div>
</div>

<!-- Categorías Destacadas -->
<div class="container mx-auto px-6 py-16">
    <h2 class="text-3xl font-bold text-center mb-12 uppercase text-white">Equipamiento Destacado</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Tarjeta 1: Fusiles -->
        <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg border border-gray-700 transition transform hover:-translate-y-1">
            <img src="{{ asset('img/fusiles.jpg') }}" alt="Rifles de Asalto" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-bold mb-2 text-red-500">Fusiles de Asalto AEG</h3>
                <p class="text-gray-400 text-sm mb-4">Réplicas eléctricas de alto rendimiento para distancias medias y largas.</p>
                <!-- Botón convertido en enlace a la ruta de fusiles -->
                <a href="{{ route('categoria.fusiles') }}" class="block text-center text-white bg-gray-700 hover:bg-gray-600 py-2 px-4 rounded w-full transition">Ver Modelos</a>
            </div>
        </div>

        <!-- Tarjeta 2: Pistolas -->
        <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg border border-gray-700 transition transform hover:-translate-y-1">
            <img src="{{ asset('img/pistolas.jpg') }}" alt="Pistolas GBB" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-bold mb-2 text-red-500">Secundarias GBB</h3>
                <p class="text-gray-400 text-sm mb-4">Pistolas de gas con retroceso realista para combate en espacios cerrados (CQB).</p>
                <!-- Botón convertido en enlace a la ruta de pistolas -->
                <a href="{{ route('categoria.pistolas') }}" class="block text-center text-white bg-gray-700 hover:bg-gray-600 py-2 px-4 rounded w-full transition">Ver Modelos</a>
            </div>
        </div>

        <!-- Tarjeta 3: Gear -->
        <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg border border-gray-700 transition transform hover:-translate-y-1">
            <img src="{{ asset('img/equipo.jpg') }}" alt="Equipo Táctico" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-bold mb-2 text-red-500">Gear & Protecciones</h3>
                <p class="text-gray-400 text-sm mb-4">Chalecos, gafas homologadas, cascos y uniformes militares completos.</p>
                <!-- Botón convertido en enlace a la ruta de gear -->
                <a href="{{ route('categoria.gear') }}" class="block text-center text-white bg-gray-700 hover:bg-gray-600 py-2 px-4 rounded w-full transition">Ver Accesorios</a>
            </div>
        </div>
    </div>
</div>
@endsection