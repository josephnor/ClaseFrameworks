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
     <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

     <div class="container mx-auto px-4">
        <h1 class="text-4x1 text-center text-gray-900 font-bold"> Editar Publicaciones</h1>
        <div class="flex bg-white rounded-lg shadow-x1 mt-4 p-8">
            <div class="w-full md:w-6/12 px-4 mx-auto text-center">
                <div class="grid grid-cols-3 gap-8 mt4">
                    @foreach($posts as $post)
                    <div class="w-1/3 p-4  flex flex-wrap">
                        
                        <img src="{{ asset('uploads').'/'.$post->imagen }}" alt="{{ $post->titulo }}" class="w-full h-48 object-cover">
                        <h1 class="text-center text-xl text-gray-900 font-bold">{{ $post->titulo }}</h1>
                        <h1 class="text-center text-xl text-gray-900 font-bold">{{ $post->Descripcion }}</h1>

                        <form action="" method="POST">
                            @csrf
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <textarea name="comentario" placeholder="Agregar comentario" class="w-full p-2 my-4"></textarea>
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Enviar</button>
                        </form>
                      </div>

                      
                    @endforeach
    
</body>
</html>