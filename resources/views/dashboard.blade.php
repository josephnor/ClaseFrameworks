<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>
    <!-- component -->
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

<!-- component -->
<div class="app bg-gray-100">

    <nav class="bg-white w-full flex relative shadow justify-between items-center px-8 h-20">
        <!-- logo -->
        <div class="inline-flex">
            <a class="_o6689fn" href="/dashboard">
                <img class="w-11 h-11 mr-2"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/Logo_USTA.png/600px-Logo_USTA.png?20170209200842"
                alt="logo">
            </a>
        </div>
    
        <!-- end logo -->
    
        <!-- login -->
        <div class="flex-initial">
          <div class="flex justify-end items-center relative">
           
            <div class="flex mr-4 items-center">
              <div class="block relative">
                <button type="button" class="inline-block py-2 px-3 hover:bg-gray-200 rounded-full relative ">
                  <div class="flex items-center h-5">
                    <div class="_xpkakx">
                    </div>
                  </div>
                </button>
              </div>
            </div>
    


            <div class="block">
                <div class="inline relative">
                    
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Menu <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                           



                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                <li>
  
                                  <form class="" action="" method="POST">
                                      @csrf
                                      @auth
                                  <a href="{{ route('inicio') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Inicio</a>
                                  @endauth
                              </form>  
                              </li>
                           
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                              <li>

                                <form class="" action="" method="POST">
                                    @csrf
                                    @auth
                                <a href="{{ route('publicaciones.create') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Crear Publicacion</a>
                                @endauth
                            </form>  
                            </li>
                              
                            </ul>
                            <form class="" action="{{ route('logout') }}" method="POST">
                                @csrf
                                @auth
                            <div class="py-1">
                              <button type="submit" value="logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Cerrar Sesion</a>
                            </div>
                            @endauth
                            </form>
                        </div>
                    
                </div>
            </div>
           
            
          </div>
        </div>
        <!-- end login -->
    </nav>
    
    <main class="grid grid-cols-1 lg:grid-cols-2 gap-6 my-12  w-2xl container px-2 mx-auto">
    
        <aside class="">
        
            <div class="bg-white shadow rounded-lg p-10">


                <div class="flex flex-col gap-1 text-center items-center">
                    <img class="h-32 w-32 bg-white p-2 rounded-full shadow mb-4" src="https://scontent.fbga1-4.fna.fbcdn.net/v/t1.6435-9/78358936_2772741366103467_9174168625223827456_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeGdOqajw0NIuryXg_TwJCs4AMeqj0UjN6kAx6qPRSM3qeCuQ5R1rjBz3Etu7DAiMUkR5sg3jRtOtjDQ1kX_Ha_o&_nc_ohc=MC5rQKUPHSsAX_3qju4&_nc_ht=scontent.fbga1-4.fna&oh=00_AfCcISjLC4xunIWx0JnvnEiQ7vENDgmvmvurWQDVPNFcPw&oe=64861802" alt="">
                    @auth
                    <p class="font-semibold">{{ auth()->user()->name }}</p>
                    @endauth

                    @auth
                    <h3 class="text-xl font-semibold leading-normal  text-blueGray-700 mb-2">
                        @ {{ auth()->user()->username }}
                    </h3>
                @endauth
                @auth
                    
                
                    <div class="text-sm leading-normal text-gray-400 flex justify-center items-center">
                    <svg viewBox="0 0 24 24" class="mr-1" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    Barrancabermeja, Colombia |Facultad:{{ auth()->user()->ProgramaAcademico }}| Semestre:{{ auth()->user()->semestre }}| Direccion:{{ auth()->user()->direccion }}| Genero:{{ auth()->user()->genero }}| Telefono:{{ auth()->user()->celular }}
                    </div>
                    @endauth
                    @auth
                    <h4 class="text-s font-semibold leading-normal  text-blueGray-700 mb-2">
                        Correo: {{ auth()->user()->email }}
                    </h4>
                @endauth

                </div>
                <div class="flex justify-center items-center gap-2 my-3">
                    <div class="font-semibold text-center mx-4">
                        <p class="text-black">102</p>
                        <span class="text-gray-400">Posts</span>
                    </div>
                    <div class="font-semibold text-center mx-4">
                        <p class="text-black">102</p>
                        <span class="text-gray-400">Followers</span>
                    </div>
                    <div class="font-semibold text-center mx-4">
                        <p class="text-black">102</p>
                        <span class="text-gray-400">Folowing</span>
                    </div>
                </div>
            </div>
    
          
    
          <br>
          {{-- Caja de subir estado --}}
        <article class="">
    
            <form class="bg-white shadow rounded-lg mb-6 p-4">
                <textarea name="message" placeholder="Type something..." class="w-full rounded-lg p-2 text-sm bg-gray-100 border border-transparent appearance-none rounded-tg placeholder-gray-400"></textarea>
                <footer class="flex justify-between mt-2">
                    <div class="flex gap-2">
                        <span class="flex items-center transition ease-out duration-300 hover:bg-blue-500 hover:text-white bg-blue-100 w-8 h-8 px-2 rounded-full text-blue-400 cursor-pointer">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                        </span>
                        <span class="flex items-center transition ease-out duration-300 hover:bg-blue-500 hover:text-white bg-blue-100 w-8 h-8 px-2 rounded-full text-blue-400 cursor-pointer">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        </span>
                        <span class="flex items-center transition ease-out duration-300 hover:bg-blue-500 hover:text-white bg-blue-100 w-8 h-8 px-2 rounded-full text-blue-400 cursor-pointer">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="4 17 10 11 4 5"></polyline><line x1="12" y1="19" x2="20" y2="19"></line></svg>
                        </span>
                    </div>
                    <button class="flex items-center py-2 px-4 rounded-lg text-sm bg-blue-600 text-white shadow-lg">Send 
                        <svg class="ml-1" viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                    </button>
                </footer>
            </form>
    {{-- fin caja de subir estado --}}

    {{-- Mostrar publicacion --}}
    
    @foreach ($posts as $post)       
    <div class="bg-white shadow rounded-lg mb-6">
             
                
                <div class="flex flex-row px-2 py-3 mx-3">
                    
                    <div class="w-auto h-auto rounded-full">
                        <img class="w-12 h-12 object-cover rounded-full shadow cursor-pointer" alt="User avatar" src="https://scontent.fbga1-4.fna.fbcdn.net/v/t1.6435-9/78358936_2772741366103467_9174168625223827456_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeGdOqajw0NIuryXg_TwJCs4AMeqj0UjN6kAx6qPRSM3qeCuQ5R1rjBz3Etu7DAiMUkR5sg3jRtOtjDQ1kX_Ha_o&_nc_ohc=MC5rQKUPHSsAX_3qju4&_nc_ht=scontent.fbga1-4.fna&oh=00_AfCcISjLC4xunIWx0JnvnEiQ7vENDgmvmvurWQDVPNFcPw&oe=64861802">
                    </div>
                    <div class="flex flex-col mb-2 ml-4 mt-1">
                        <div class="text-gray-600 text-sm font-semibold">{{ auth()->user()->username }}</div>
                @auth
                @if ($post->user_id == auth()->user()->id)
                <form action="{{ route('publicaciones.destroy', $post) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit"
                    value="Eliminar Post"
                    class="font-extralight text-sm  hover:font-bold">    
        
                </form>   
                    @endif  
                    @endauth        
                        <div class="flex w-full mt-1">
                            <div class="text-blue-700 font-base text-xs mr-1 cursor-pointer">
                                CEO
                            </div> 
                            <div class="text-gray-400 font-thin text-xs">
                                •{{ $post->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Dar y mostrar likes --}}

                
                
           

                
                
                

                
                <div class="border-b border-gray-100"></div> 
                <div class="text-gray-400 font-medium text-sm mb-7 mt-6 mx-3 px-2">
                    <div class="grid grid-cols-8 col-span-2   gap-2  ">
                        <div class=" overflow-hidden rounded-xl col-span-2 ">
                            {{ $post->titulo }}
                            {{-- <a href="{{ route('publicaciones.show', ['post'=>$post,'user'=>$user]) }}"> --}}
                            <img src="{{ asset('uploads') . '/' . $post->imagen }}" alt="{{ $post->titulo }}"  class="h-full w-full object-cover">
                        </div>
                        
                    </div>
                </div>
                
                
                <div class="text-gray-500 text-sm mb-6 mx-3 px-2">{{ $post->Descripcion }}</div>
                <div class="flex justify-start mb-4 border-t border-gray-100">
                    <div class="flex w-full mt-1 pt-2 pl-5">
                        <span class="bg-white transition ease-out duration-300 hover:text-red-500 border w-8 h-8 px-2 pt-2 text-center rounded-full text-gray-400 cursor-pointer mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="14px" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                            </svg>
                        </span>
                        
                    </div>
            {{-- Dar y mostrar likes --}}
                    <form  class=" mt-0.5 pt-2 pr-5" action="{{ route('likes.store', ['post' => $post]) }}" method="POST">
                        @csrf
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <button type="submit">
                    <div class="flex justify-end w-full mt-1 pt-2 pr-5">
                       
                        <span class="transition ease-out duration-300 hover:bg-gray-50 bg-gray-100 h-8 px-2 py-2 text-center rounded-full text-gray-100 cursor-pointer">
                            <svg class="h-4 w-4 text-red-500 fill-red-500"  viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
                            </svg>
                        </span>
                        
                    </div>

                </button>
                </form>

            {{-- Fin de Dar y mostrar likes --}}
                </div> 
                <div class="flex w-full border-t border-gray-100">
                    <div class="mt-3 mx-5 flex flex-row text-xs">
                        <div class="flex text-gray-700 font-normal rounded-md mb-2 mr-4 items-center">Comments:<div class="ml-1 text-gray-400 text-ms">{{ $post->comentarios->count() }}</div></div>
                        <div class="flex text-gray-700 font-normal rounded-md mb-2 mr-4 items-center">Views: <div class="ml-1 text-gray-400 text-ms"> 60k</div></div>
                    </div>
                    <div class="mt-3 mx-5 w-full flex justify-end text-xs">
                        <div class="flex text-gray-700  rounded-md mb-2 mr-4 items-center">Likes: <div class="ml-1 text-gray-400  text-ms">{{ $post->likes->count() }}</div></div>
                    </div>
                </div>
                  


                {{-- Mostrar Comentario --}}
                @if ($post->comentarios->count())
                    @foreach ($post->comentarios as $comentario)
                <div class="text-black p-4 antialiased flex">
                    <img class="rounded-full h-8 w-8 mr-2 mt-1 " src="https://scontent.fbga1-4.fna.fbcdn.net/v/t1.6435-9/78358936_2772741366103467_9174168625223827456_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeGdOqajw0NIuryXg_TwJCs4AMeqj0UjN6kAx6qPRSM3qeCuQ5R1rjBz3Etu7DAiMUkR5sg3jRtOtjDQ1kX_Ha_o&_nc_ohc=MC5rQKUPHSsAX_3qju4&_nc_ht=scontent.fbga1-4.fna&oh=00_AfCcISjLC4xunIWx0JnvnEiQ7vENDgmvmvurWQDVPNFcPw&oe=64861802">
                    <div>
                        <div class="bg-gray-100 rounded-lg px-4 pt-2 pb-2.5">
                            <div class="font-semibold text-sm leading-relaxed">
                                <a href="{{ route('accesoseguro', $comentario->user) }}">{{ $comentario->user->username }}</a> 
                            </div>
                            <div class="text-xs leading-snug md:leading-normal">{{ $comentario->textoComentario }}</div>
                        </div>
                        <div class="text-xs  mt-0.5 text-gray-500">{{ $comentario->created_at->diffForHumans() }}</div>
                        
                        <div class="bg-white border border-white rounded-full float-right -mt-8 mr-0.5 flex shadow items-center ">
                            <svg class="p-0.5 h-5 w-5 rounded-full z-20 bg-white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 16 16"><defs><linearGradient id="a1" x1="50%" x2="50%" y1="0%" y2="100%"><stop offset="0%" stop-color="#18AFFF"></stop><stop offset="100%" stop-color="#0062DF"></stop></linearGradient><filter id="c1" width="118.8%" height="118.8%" x="-9.4%" y="-9.4%" filterUnits="objectBoundingBox"><feGaussianBlur in="SourceAlpha" result="shadowBlurInner1" stdDeviation="1"></feGaussianBlur><feOffset dy="-1" in="shadowBlurInner1" result="shadowOffsetInner1"></feOffset><feComposite in="shadowOffsetInner1" in2="SourceAlpha" k2="-1" k3="1" operator="arithmetic" result="shadowInnerInner1"></feComposite><feColorMatrix in="shadowInnerInner1" values="0 0 0 0 0 0 0 0 0 0.299356041 0 0 0 0 0.681187726 0 0 0 0.3495684 0"></feColorMatrix></filter><path id="b1" d="M8 0a8 8 0 00-8 8 8 8 0 1016 0 8 8 0 00-8-8z"></path></defs><g fill="none"><use fill="url(#a1)" xlink:href="#b1"></use><use fill="black" filter="url(#c1)" xlink:href="#b1"></use><path fill="white" d="M12.162 7.338c.176.123.338.245.338.674 0 .43-.229.604-.474.725a.73.73 0 01.089.546c-.077.344-.392.611-.672.69.121.194.159.385.015.62-.185.295-.346.407-1.058.407H7.5c-.988 0-1.5-.546-1.5-1V7.665c0-1.23 1.467-2.275 1.467-3.13L7.361 3.47c-.005-.065.008-.224.058-.27.08-.079.301-.2.635-.2.218 0 .363.041.534.123.581.277.732.978.732 1.542 0 .271-.414 1.083-.47 1.364 0 0 .867-.192 1.879-.199 1.061-.006 1.749.19 1.749.842 0 .261-.219.523-.316.666zM3.6 7h.8a.6.6 0 01.6.6v3.8a.6.6 0 01-.6.6h-.8a.6.6 0 01-.6-.6V7.6a.6.6 0 01.6-.6z"></path></g></svg>
                            <span class="text-sm ml-1 pr-1.5 text-gray-500">3</span>
                            
                            @auth
                            @if ($post->user_id == auth()->user()->id)
                            <form action="{{ route('comentarios.destroy', $comentario->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" value="eliminarComentario"
                                class="">x</button>
        
                            </form>
                            @endif  
                            @endauth      
                            
                          
                        </div>
                    </div>
                </div> @endforeach
@else
<p class="text-center
        text-s text-gray-900 font-sans">Aun no hay comentarios</p>
    @endif
    {{-- Fin Mostrar Comentario --}}

    {{-- Crear comentario --}}
    <form action="{{ route('comentarios.store', ['post' => $post, 'user' => $user]) }}" method="POST">
        @csrf
        <div
            class="relative flex items-center self-center w-full max-w-xl p-4 overflow-hidden text-gray-600 focus-within:text-gray-400">

            <img class="w-10 h-10 object-cover rounded-full shadow mr-2 cursor-pointer" alt="User avatar"
                src="https://scontent.fbga1-4.fna.fbcdn.net/v/t1.6435-9/78358936_2772741366103467_9174168625223827456_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeGdOqajw0NIuryXg_TwJCs4AMeqj0UjN6kAx6qPRSM3qeCuQ5R1rjBz3Etu7DAiMUkR5sg3jRtOtjDQ1kX_Ha_o&_nc_ohc=MC5rQKUPHSsAX_3qju4&_nc_ht=scontent.fbga1-4.fna&oh=00_AfCcISjLC4xunIWx0JnvnEiQ7vENDgmvmvurWQDVPNFcPw&oe=64861802">
            <span class="absolute inset-y-0 right-0 flex items-center pr-6">

                <button type="submit" class="p-1 focus:outline-none focus:shadow-none hover:text-blue-500">
                    Enviar
                </button>
            </span>
            <input type="text" name="textoComentario"
                class="w-full py-2 pl-4 pr-10 text-sm bg-gray-100 border border-transparent appearance-none rounded-tg placeholder-gray-400"
                style="border-radius: 25px" placeholder="Post a comment..." autocomplete="off">
        </div>
        </div>
    </form>
    {{-- fin de crear comentario --}}

    @endforeach
    {{-- Fin Mostrar publicacion --}}
    <div>
        {{ $posts->links('pagination::tailwind') }}

    </div>




    </article>

    </main>

    </div>
</body>

</html>
