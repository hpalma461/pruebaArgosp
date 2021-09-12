<x-app-layout>
    <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        {{-- acceder a la variable categoria y despues al nombre --}}
     <h1 class="uppercase text-center text-3xl font-bold">Etiqueta: {{$tag->name}}</h1>

        @foreach ($posts as $post)
            {{-- llamar el componente de blade de la tarjeta de post y pasarle la variable al componente para enviarlo --}}
            <x-card-post :post="$post"/>        
        @endforeach

        <div class="mt-4">
            {{$posts->links()}}
        </div>


    </div>

    



</x-app-layout>