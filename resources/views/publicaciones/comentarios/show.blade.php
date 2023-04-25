<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Publicacion</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>
    <!-- component -->
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg mt-16">
        <div class="px-6">
            <div class="flex flex-wrap justify-center">
                <div class="container mx-auto px-4">
                    <h1 class="text-4x1 text-center text-gray-900 font-bold">Publicaciones</h1>
                    <div class="flex bg-white rounded-lg shadow-x1 mt-4 p-8">
                        <div class="w-full md:w-6/12 px-4 mx-auto text-center">
                            <div class=" gap-8 mt4">
                                <div class=" w-full">

                                    <img src="{{ asset('uploads') . '/' . $post->imagen }}" alt="{{ $post->titulo }}"
                                        class="w-full h-48 object-cover">
                                    <h1 class="text-center text-xl text-gray-900 font-bold">{{ $post->titulo }}</h1>
                                    <h1 class="text-center text-m text-gray-900 font-bold">{{ $post->Descripcion }}</h1>
                                    @auth
                                        <h1 class="text-center text-s text-gray-900 font-bold">
                                            Publicado por:{{ auth()->user()->username }}</h1>
                                    @endauth
                                    <p class="text-center text-s text-gray-900 font-sans">
                                        {{ $post->created_at->diffForHumans() }}</p>
                                        @auth
                                        <p class="text-center text-s text-gray-900 font-sans">
                                            {{ auth()->comentario()->textoComentario}}</p>
                                    
                                        @endauth
                                    

                                </div>
                            </div>
                        </div>
                    </div>

</body>

</html>
