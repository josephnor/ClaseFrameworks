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
    @csrf
    <!-- component -->
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg mt-16">
        <div class="px-6">
            <div class="flex flex-wrap justify-center">
                <div class="container mx-auto px-4">
                    <h1 class="text-4x1 text-center text-gray-900 font-bold"> Editar Publicaciones</h1>
                    <div class="flex bg-white rounded-lg shadow-x1 mt-4 p-8">
                        <div class="w-full md:w-6/12 px-4 mx-auto text-center">
                            <div class=" gap-8 mt4">
                                <div class=" w-full">
                                    <form action="{{ route('comentarios.store',['post'=>$post,'user'=>$user])}}" method="POST">
                                        @csrf
                                    <img src="{{ asset('uploads') . '/' . $post->imagen }}" alt="{{ $post->titulo }}"
                                        class="w-full h-48 object-cover">
                                    <h1 class="text-center text-xl text-gray-900 font-bold">{{ $post->titulo }}</h1>
                                    <h1 class="text-center text-m text-gray-900 font-normal">{{ $post->Descripcion }}</h1>
                                    @auth
                                        <h1 class="text-center text-s text-gray-900 font-bold">
                                            Publicado por:{{ auth()->user()->username }}</h1>
                                    @endauth
                                    <p class="text-center text-s text-gray-900 font-sans">
                                        {{ $post->created_at->diffForHumans() }}</p>

                                         <input type="hidden" name="textoComentario" value="">
                                        <textarea name="textoComentario" placeholder="Agregar comentario" class="w-full p-2 my-4"></textarea>
                                        <button type="submit"
                                            class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Enviar</button>
                                    </form>
                                    <br>
                                    <br>
                                    <h1 class="text-center text-l text-gray-900 font-normal">Comentarios:</h1>

                                   
                                        @if ($post->comentarios->count())
                                        @foreach ($post->comentarios as $comentario)
                                       <a href="{{route('accesoseguro',$comentario->user)}}" class="text-center text-s text-gray-900 font-bold">
                                            {{ $comentario->user->username}}</a>
                            
                                       
                                    
                                        <p class="text-center text-s text-gray-900 font-sans">
                                            {{ $comentario->textoComentario}}</p> 
                                        <p class="text-center text-s text-gray-900 font-sans">
                                                {{ $comentario->created_at->diffForHumans()}}</p> 


                                        


                                        <form action="{{ route('comentarios.destroy',$comentario->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" value="eliminarComentario"
                                            class="inline-block px-1 py-1 bg-blue-600 text-white font-medium text-s leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                                        >x</button>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        </form>    

                                         @endforeach   
                                        
                                        @else
                                        <p class="text-center text-s text-gray-900 font-sans">Aun no hay comentarios</p>
                                        @endif 


                                        @auth
                                        @if ($post->user_id==auth()->user()->id)
                                            
                        
                                        
                                    <form action="{{route('publicaciones.destroy',$post)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit"
                                        value="Eliminar Post"
                                        class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">    
                                        
                        
                                        
                                        </form>   
                                        @endif  
                                        @endauth          
                                            
                                    
                                        
                                       
                                </div>
                            </div>
                        </div>
                    </div>

</body>

</html>
