<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="container">
                    <div class="card">
                        <div class="card-header">
                            <h3>Bienvenid@ {{auth()->user()->name}} {{auth()->user()->surnames}}</h3>                        
                        </div>
                        <div class="card-body">
                            Tus credenciales nunca serán solicitadas por trabajadores
                        </div>
                        <div class="card-footer">
                            terr@Vida
                        </div>
                    </div>
                </div>
               
            
        </div>
    </div>
</x-app-layout>
