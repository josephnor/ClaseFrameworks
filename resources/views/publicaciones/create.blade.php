<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Publiacion</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
</head>

<body>


    <section class="bg-cover bg-cyan-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#"
                class="flex items-center mb-6 text-3xl font-semibold text-white-200 text-white bg-cyan-900">
                <img class="w-8 h-8 mr-2"
                    src="https://innpulsacolombia.com/cemprende/sites/default/files/styles/950x/public/2021-04/7.Logo_de_la_Santo_Tom%C3%A1s.png?itok=gEq3fWZ9"
                    alt="logo">
                Crear Publicacion {{ auth()->user()->name }}

            </a>

            <div
                class="w-full bg-slate-700 rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class=" p-6 space-y-4 md:space-y-6 sm:p-8">



                    <div class="flex items-center justify-center w-full">


                        <form action="{{ route('imagenes.store') }}" method="POST"
                            class="dropzone border-dashed border-2 w-full h-full rounded flex flex-col
                        justify-center items-center"
                            id="dropzone">
                            @csrf
                        </form>
                    </div>

                    <form class=" space-y-4 md:space-y-6" action="{{ route('publicaciones.store') }}" method="POST">
                        @csrf
                        <div>
                            <label for="titulo"
                                class="block mb-2 text-sm font-medium text-white dark:text-white">Titulo</label>
                            <input type="text" name="titulo" id="titulo"
                                class="bg-gray-50 border border-gray-300 text-black sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Nombre" required="">

                        </div>

                        <div>

                            <label for="Descripcion"
                                class="block mb-2 text-sm font-medium text-white dark:text-white">Descripcion</label>
                            <textarea name="Descripcion" id="Descripcion" rows="4"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Escribe la descripcion">
                            
                            </textarea>



                        </div>

                        <div class='mb-6'>
                            <input name="imagen" type="hidden" value="{{ old('imagen') }}">

                        </div>



                        <div>
                            <button type="submit"
                                class="my-5 w-full flex justify-center bg-blue-500 text-gray-100 p-4  rounded-full tracking-wide
                                font-semibold  focus:outline-none focus:shadow-outline hover:bg-blue-600 shadow-lg cursor-pointer transition ease-in duration-300">
                                Publicar
                            </button>



                        </div>
                        <div>

                    </form>
                </div>

            </div>

        </div>
    </section>
</body>

</html>
