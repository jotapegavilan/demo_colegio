<x-app-layout>
    <div class="container py-8">
        <div class="grid mt-8  gap-8 grid-cols-1 md:grid-cols-2 xl:grid-cols-2">
            @foreach ($postulantes as $postulante)
            <div class="flex flex-col">
                <div class="bg-white shadow-md  rounded-3xl p-4">
                    <div class="flex-none lg:flex">
                        <div class=" h-full w-full lg:h-48 lg:w-48   lg:mb-0 mb-3">
                            <a href="{{route('postulantes.show',$postulante)}}">
                                <img src="@if($postulante->image){{Storage::url($postulante->image->url)}} @else https://cdn.pixabay.com/photo/2015/01/06/21/31/man-590855_960_720.jpg @endif"
                                alt="Just a flower" class=" w-full  object-scale-down lg:object-cover  lg:h-48 rounded-2xl">
                            </a>
                            
                        </div>
                        <div class="flex-auto ml-3 justify-evenly py-2">
                            <div class="flex flex-wrap ">
                                <div class="w-full flex-none text-xs text-blue-700 font-medium ">
                                    Postulante
                                </div>
                                <h2 class="flex-auto text-lg font-medium">{{$postulante->full_name}}</h2>
                            </div>
                            <p class="mt-3"></p>
                            <div class="flex py-4  text-sm text-gray-600">
                                <div class="flex-1 inline-flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                    </svg>
                                    <p class="ml-3">{{$postulante->curso->full_name}}</p>
                                </div>
                                <div class="flex-1 inline-flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <p class="">{{$postulante->date_of_birth}}</p>
                                </div>
                            </div>
                            <div class="flex p-4 pb-2 border-t border-gray-200 "></div>
                            <div class="flex space-x-3 text-sm font-medium">
                                <div class="flex-auto flex space-x-3">
                                    <button
                                        class="mb-2 md:mb-0 bg-white px-5 py-2 shadow-sm tracking-wider border text-gray-600 rounded-full hover:bg-gray-100 inline-flex items-center space-x-2 ">
                                        @if ($postulante->statu->number == 0)
                                            <span class="text-blue-400 rounded-lg">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </span>
                                            <span>Pendiente</span>
                                        @else
                                            @if ($postulante->statu->number == 1)
                                            <span class="text-red-400 rounded-lg">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                                </svg>
                                            </span>
                                                <span>Rechazado</span>
                                            @else
                                                @if ($postulante->statu->number==2)
                                                <span class="text-green-400 rounded-lg">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                </span>
                                                    <span>Aceptado</span>
                                                @else
                                                <span class="text-green-400 rounded-lg">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                </span>
                                                    <span>Matriculado</span>
                                                @endif
                                            @endif
                                        @endif                                       
                                        
                                    </button>
                                </div>
                                <button
                                    class="mb-2 md:mb-0 bg-gray-900 px-5 py-2 shadow-sm tracking-wider text-white rounded-full hover:bg-gray-800"
                                    type="button" aria-label="like">Modificar estado</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                {{-- <article class="w-full h-80 bg-cover bg-center" style="background-image: url({{Storage::url($postulante->image->url)}});">
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
                </article> --}}
            @endforeach
        </div>
        <div class="mt-3">
            {{$postulantes->links()}}
        </div>
    </div>
</x-app-layout>