<x-app-layout>
    <div class="container py-8">
        <span class="text-4xl font-bold text-gray-600">
            {{$postulante->full_name}}
        </span>
        <span>
            @switch($postulante->statu->number)
            @case(0)
            <button
                class="mb-3 md:mb-0 bg-blue-500 px-3 py-1 shadow-sm tracking-wider border text-white rounded-full hover:bg-blue-400 inline-flex items-center space-x-2 ">
                <span class="text-white hover:text-black rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </span>
                <span>
                    Pendiente
                </span>
            </button>
                @break
            @case(1)
            <button
            class="mb-3 md:mb-0 bg-red-500 px-3 py-1 shadow-sm tracking-wider border text-white rounded-full hover:bg-red-400 inline-flex items-center space-x-2 ">
            <span class="text-white hover:text-black rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                </svg>
            </span>
            <span>
                Rechazado
            </span>
        </button>
                @break
            @case(2)
            <button
            class="mb-3 md:mb-0 bg-green-500 px-3 py-1 shadow-sm tracking-wider border text-white rounded-full hover:bg-green-400 inline-flex items-center space-x-2 ">
            <span class="text-white hover:text-black rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </span>
            <span>
                Aceptado
            </span>
        </button>
                @break
                @case(3)
            <button
            class="mb-3 md:mb-0 bg-green-500 px-3 py-1 shadow-sm tracking-wider border text-white rounded-full hover:bg-green-400 inline-flex items-center space-x-2 ">
            <span class="text-white hover:text-black rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </span>
            <span>
                Matriculado
            </span>
        </button>
                @break
            @default                
        @endswitch
        </span>
        <div class="grid grid-cols-3 gap-6">
            <div class="col-span-2">
                <img class="object-scale-down w-100 h-60 rounded-2xl" src="@if($postulante->image){{Storage::url($postulante->image->url)}} @else https://cdn.pixabay.com/photo/2015/01/06/21/31/man-590855_960_720.jpg @endif" alt="">
        <span class="text-lg text-gray-600">
            Postula a {{$postulante->curso->full_name}}.
        </span>       
        <br> 
        <span class="text-lg text-gray-600">
            Año: {{$postulante->age->name}}.
        </span>       
        <br> 
        <span class="text-lg text-gray-600">
            Fecha de nacimiento: {{$fecha}}.
        </span>   
        <br>     
        <span class="text-lg text-gray-600">
            Edad: {{$edad}} años.
        </span>

            </div>
            
        <div>
            <aside>
                <h1 class="text-2xl">Otros alumnos con el mismo estado</h1>
                @foreach ($similares as $similar)
                <a href="{{route('postulantes.show',$similar)}}">
                    <article class="flex flex-col justify-center object-scale-dow w-50 h-40 object-cover object-center rounded-2xl my-2" style="background-image: url({{Storage::url($similar->image->url)}})" >
                        <span class="ml-5 text-white text-lg text-bold ">{{$similar->names}} {{$similar->surnames}}</span>
                    </article>
                </a>
                   
                @endforeach
            </aside>
        </div>
        </div>
       
        
    </div>

    
</x-app-layout>