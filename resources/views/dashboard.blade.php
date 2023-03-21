<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    @vite('resources/css/app.css')
</head>
<body>
    <!-- component -->
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
 

<section class="pt-16 bg-blueGray-50">
  <form class="space-y-4 md:space-y-6" action="{{route("logout")}}" method="POST">
    @csrf
  @auth
    <div class= "#">
      <button
  type="submit"
  value="logout"
  class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
  Log out
</button>
    </div>
  @endauth

  

<div class="w-full lg:w-4/12 px-4 mx-auto">
  <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg mt-16">
    <div class="px-6">
      <div class="flex flex-wrap justify-center">
        <div class="w-full px-4 flex justify-center">
          <div class="relative">
            <img alt="..." src="https://scontent.fbga1-4.fna.fbcdn.net/v/t1.6435-9/78358936_2772741366103467_9174168625223827456_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeGdOqajw0NIuryXg_TwJCs4AMeqj0UjN6kAx6qPRSM3qeCuQ5R1rjBz3Etu7DAiMUkR5sg3jRtOtjDQ1kX_Ha_o&_nc_ohc=inQ8BXcgOdEAX-cPmUT&_nc_ht=scontent.fbga1-4.fna&oh=00_AfD1vbRxLV49yoS4Gjpq25EAw91ADnNTROzibKIXiuaoaA&oe=642EDCC2" class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-150-px">
          </div>
        </div>
        <div class="w-full px-4 text-center mt-20">
          <div class="flex justify-center py-4 lg:pt-4 pt-8">
            <div class="mr-4 p-3 text-center">
              <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">
                13M
              </span>
              <span class="text-sm text-blueGray-400">Seguidores</span>
            </div>
            <div class="mr-4 p-3 text-center">
              <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">
                120
              </span>
              <span class="text-sm text-blueGray-400">Photos</span>
            </div>
            <div class="lg:mr-4 p-3 text-center">
              <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">
                210k
              </span>
              <span class="text-sm text-blueGray-400">Comments</span>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-12">
        @auth
          
        
        <h3 class="text-xl font-semibold leading-normal  text-blueGray-700 mb-2">
          {{auth()->user()->username}}
        </h3>
        @endauth
        @auth
          
       
        <h4 class="text-xl font-semibold leading-normal text-blueGray-700 mb-2">
          {{auth()->user()->name}}
        </h4>
        @endauth
        <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase">
          <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i>
          Barrancabermeja, Colombia
        </div>
        @auth
         
        <div class="mb-2 text-blueGray-600 mt-10">
          <i class="fas fa-briefcase mr-2 text-lg text-blueGray-400"></i>
          Facultad:{{auth()->user()->ProgramaAcademico}}
        </div>
        @endauth

        @auth
        <div class="mb-2 text-blueGray-600 mt-10">
          <i class="fas fa-briefcase mr-2 text-lg text-blueGray-400"></i>
          Semestre:{{auth()->user()->semestre}}
        </div>
        @endauth

        @auth
        <div class="mb-2 text-blueGray-600 mt-10">
          <i class="fas fa-briefcase mr-2 text-lg text-blueGray-400"></i>
          Direccion:{{auth()->user()->direccion}}
        </div>
        @endauth

        @auth
        <div class="mb-2 text-blueGray-600 mt-10">
          <i class="fas fa-briefcase mr-2 text-lg text-blueGray-400"></i>
          Genero:{{auth()->user()->genero}}
        </div>
        @endauth

        @auth
        <div class="mb-2 text-blueGray-600 mt-10">
          <i class="fas fa-briefcase mr-2 text-lg text-blueGray-400"></i>
          Telefono:{{auth()->user()->celular}}
        </div>
        @endauth
        <div class="mb-2 text-blueGray-600">
          <i class="fas fa-university mr-2 text-lg text-blueGray-400"></i>
         Universidad Santo Tomas
        </div>

        @auth
        <h4 class="text-xl font-semibold leading-normal  text-blueGray-700 mb-2">
          Correo: {{auth()->user()->email}}
        </h4>
        @endauth


      </div>
      <div class="mt-10 py-10 border-t border-blueGray-200 text-center">
        <div class="flex flex-wrap justify-center">
          <div class="w-full lg:w-9/12 px-4">
            <p class="mb-4 text-lg leading-relaxed text-blueGray-700">
              {{auth()->user()->descripcion}}
            <a href="javascript:void(0);" class="font-normal text-pink-500">
              Show more
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="relative  pt-8 pb-6 mt-8">
  <div class="container mx-auto px-4">
    <div class="flex flex-wrap items-center md:justify-between justify-center">
      <div class="w-full md:w-6/12 px-4 mx-auto text-center">
       
      </div>
    </div>
  </div>
</footer>
  </form>
</section>
</body>
</html>