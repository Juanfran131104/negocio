@extends('layouts.app')

@section('title', 'Catálogo y Equipamiento')

@section('content')
<div class="container mx-auto px-6 py-12">
    <h1 class="text-4xl font-extrabold text-white mb-8 border-b border-gray-700 pb-4 uppercase tracking-wide">Nuestro Armería</h1>
    
    <div class="bg-gray-800 rounded-lg p-8 shadow-lg border border-gray-700">
        <p class="text-gray-300 text-lg mb-8">
            En Fuego Cruzado Airsoft trabajamos con las mejores marcas del mercado (Tokyo Marui, VFC, G&G, Specna Arms) para asegurarnos de que tu equipamiento nunca te deje tirado en medio de una escaramuza.
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="border border-gray-700 p-6 rounded-lg bg-gray-900 hover:border-red-500 transition duration-300">
                <h2 class="text-2xl text-red-500 font-bold mb-4 flex items-center">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    Réplicas Principales
                </h2>
                <ul class="list-disc list-inside text-gray-400 space-y-2">
                    <li>Fusiles de Asalto (AEG y HPA)</li>
                    <li>Subfusiles (SMG) para entornos CQB</li>
                    <li>Rifles de Francotirador (Sniper y DMR)</li>
                    <li>Ametralladoras de Apoyo (LMG)</li>
                </ul>
            </div>
            
            <div class="border border-gray-700 p-6 rounded-lg bg-gray-900 hover:border-red-500 transition duration-300">
                <h2 class="text-2xl text-red-500 font-bold mb-4 flex items-center">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    Gear y Consumibles
                </h2>
                <ul class="list-disc list-inside text-gray-400 space-y-2">
                    <li>Bolas (BBs) biodegradables y trazadoras</li>
                    <li>Gas, CO2 y Baterías LiPo</li>
                    <li>Gafas homologadas y máscaras de malla</li>
                    <li>Chalecos tácticos (Plate Carriers) y Pouches</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection