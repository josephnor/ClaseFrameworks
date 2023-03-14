<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portal de Inicio</title>
    @vite('resources/css/app.css')

</head>
<body>
    <!-- página inicial de USTA -->
    <div class="relative overflow-hidden bg-no-repeat bg-cover" style="
    background-position: 30%;
    background-image: url('https://pbs.twimg.com/media/DBWSNx_WsAEiq9t.jpg');
    height: 1000px;">
    <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
      style="background-color: rgba(0, 0, 0, 0.75)">
      <div class="flex justify-center items-center h-full">
        <div class="text-center text-white px-6 md:px-12">
          <h1 class="text-5xl font-bold mt-0 mb-6">Universidad Santo Tomás</h1>
          <h3 class="text-3xl font-bold mb-8">Portal de Inicio</h3>
          <a type="button"
          class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"
           href="{{route("registro")}}">
            Registrase
          </a>
           <br>
           <br>
           <a type="button"
           class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"
            href="{{route("login")}}">
              Iniciar Sesión
            </a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>



