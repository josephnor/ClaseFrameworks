<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Publiacion</title>
    @vite('resources/css/app.css')
</head>

<body>


    <section class="bg-cover bg-cyan-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-3xl font-semibold text-white-200 text-white bg-cyan-900">
                <img class="w-8 h-8 mr-2"
                    src="https://innpulsacolombia.com/cemprende/sites/default/files/styles/950x/public/2021-04/7.Logo_de_la_Santo_Tom%C3%A1s.png?itok=gEq3fWZ9"
                    alt="logo">
                Crear Publicacion
            </a>

            <div
                class="w-full bg-slate-700 rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class=" p-6 space-y-4 md:space-y-6 sm:p-8">

                    <div>
                        <label for="titulo"
                            class="block mb-2 text-sm font-medium text-white dark:text-white">Titulo</label>
                        <input type="titulo" name="titulo" id="titulo"
                            class="bg-gray-50 border border-gray-300 text-black sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Nombre" required="">

                    </div>

                    <div>

                        <label for="message"
                            class="block mb-2 text-sm font-medium text-white dark:text-white">Descripcion</label>
                        <textarea id="message" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Escribe la descripcion"></textarea>



                    </div>


                    <div class="flex items-center justify-center w-full">
                        <form action="{{ route('publicaciones.create') }}" method="POST" class="dropzone"
                            id="my-awesome-dropzone">
                            <label for="dropzone-file"
                                class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                        </path>
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                            class="font-semibold">Click to upload</span> or drag and drop</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX.
                                        800x400px)</p>
                                </div>
                                <input id="dropzone-file" type="file" name="file" />
                            </label>
                        </form>
                    </div>




                </div>
            </div>
        </div>
    </section>
</body>

</html>
