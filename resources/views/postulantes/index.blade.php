<x-app-layout>
    <div class="container py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($postulantes as $postulante)
            
                <article class="w-full h-80 bg-cover bg-center" style="background-image: url({{Storage::url($postulante->image->url)}});">
                    <div class="h-1/5 px-8 flex flex-col justify-start">
                       
                    </div>
                    <div class="w-full h-4/5 px-8 flex flex-col justify-end">
                        <div class="mb-3">
                            @if ($postulante->status == 0)
                            <h4 class="inline-block px-3 h-6 bg-gray-600 text-white rounded-full">
                                Pendiente
                            </h4>
                            @else
                                @if ($postulante->status == 1)
                                <h4 class="inline-block px-3 h-6 bg-green-600 text-white rounded-full">
                                    Aceptado
                                </h4>
                                @else
                                <h4 class="inline-block px-3 h-6 bg-red-600 text-white rounded-full">
                                    Rechazado
                                </h4>
                                @endif
                            @endif
                        </div>
                        <h1 class="text-4xl text-white leading-8 font-bold mb-5">
                            {{$postulante->names}}
                            {{$postulante->surnames}}
                        </h1>
                    </div>
                </article>
            @endforeach
        </div>
        <div class="mt-3">
            {{$postulantes->links()}}
        </div>
    </div>
</x-app-layout>