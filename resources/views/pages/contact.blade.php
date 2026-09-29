@extends('layouts.app')

@section('title', 'Contacto')

@section('content')
<div class="container mx-auto px-6 py-12">
    <h1 class="text-4xl font-extrabold text-white mb-8 border-b border-gray-700 pb-4 uppercase tracking-wide">Transmisión Entrante</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
        <div>
            <h2 class="text-2xl font-bold text-red-500 mb-6">Base de Operaciones</h2>
            <p class="text-gray-300 mb-6">¿Tienes dudas sobre una réplica, necesitas mejorar tu equipo o quieres consultar disponibilidad? Envíanos un mensaje y te responderemos antes de que recargues.</p>

            <div class="space-y-4 text-gray-400">
                <p class="flex items-center">
                    <svg class="w-6 h-6 mr-3 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    Algeciras, Andalucía, España
                </p>
                <p class="flex items-center">
                    <svg class="w-6 h-6 mr-3 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    +34 600 000 000
                </p>
                <p class="flex items-center">
                    <svg class="w-6 h-6 mr-3 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    info@fuegocruzado.test
                </p>
            </div>
        </div>

        <div class="bg-gray-800 p-8 rounded-lg border border-gray-700 shadow-lg">
            <form action="#" method="POST" class="space-y-6">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-400">Nombre o Callsign</label>
                    <input type="text" id="name" name="name" class="mt-1 block w-full bg-gray-900 border border-gray-700 rounded-md shadow-sm py-2 px-3 text-white focus:outline-none focus:ring-red-500 focus:border-red-500" placeholder="Ej: Ghost">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-400">Correo Electrónico</label>
                    <input type="email" id="email" name="email" class="mt-1 block w-full bg-gray-900 border border-gray-700 rounded-md shadow-sm py-2 px-3 text-white focus:outline-none focus:ring-red-500 focus:border-red-500" placeholder="tu@email.com">
                </div>
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-400">Mensaje</label>
                    <textarea id="message" name="message" rows="4" class="mt-1 block w-full bg-gray-900 border border-gray-700 rounded-md shadow-sm py-2 px-3 text-white focus:outline-none focus:ring-red-500 focus:border-red-500" placeholder="Escribe aquí tu consulta..."></textarea>
                </div>
                <div>
                    <button type="button" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-bold text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 focus:ring-offset-gray-900 transition duration-300">
                        Enviar Transmisión
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection