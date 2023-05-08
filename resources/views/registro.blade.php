<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    @vite('resources/css/app.css')
    
</head>

<body>


    <section class="bg-cover bg-[url('/img/ustafondo.jpeg')]">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-8 text-4xl font-semibold text-white-200 text-white bg-gray-800 rounded-lg ">
                <img class="w-8 h-8 mr-2"
                    src="https://innpulsacolombia.com/cemprende/sites/default/files/styles/950x/public/2021-04/7.Logo_de_la_Santo_Tom%C3%A1s.png?itok=gEq3fWZ9"
                    alt="logo">
                Universidad Santo Tomas 
            </a>
            <div
                class="w-full bg-slate-700 rounded-lg shadow dark:border md:mt-0 sm:max-w-4xl xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-10 space-x-1 md:space-y-6 sm:p-4">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-white md:text-2xl dark:text-white">
                        Crear una cuenta
                    </h1>
                    <form class=" grid grid-cols-3 grid-rows-4 gap-4 space-y-4 md:space-y-8 md:space-x-px" action="{{route('registro')}}" method="POST">
                        @csrf

                        <div>
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-white dark:text-white">Nombre</label>
                            <input type="name" name="name" id="name"
                                class="bg-gray-50 border border-gray-300 text-black sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Nombre" required="">
                            @error('name')
                                <p class="bg-red-600 text-white my-2 text-sm p-2 text-center">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="username"
                                class="block mb-2 text-sm font-medium text-white dark:text-white">Usuario</label>
                            <input type="username" name="username" id="username"
                                class="bg-gray-50 border border-gray-300 text-black sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Usuario" required="">
                            @error('email')
                                <p class="bg-red-600 text-white my-2 text-sm p-2 text-center">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-white dark:text-white">Email</label>
                            <input type="email" name="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-black sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="name@company.com" required="">
                            @error('email')
                                <p class="bg-red-600 text-white my-2 text-sm p-2 text-center">{{ $message }}</p>
                            @enderror
                        </div>


                        <div>
                            <label for="celular"
                                class="block mb-2 text-sm font-medium text-white dark:text-white">Celular</label>
                            <input type="celular" name="celular" id="celular"
                                class="bg-gray-50 border border-gray-300 text-black sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Digite su celular" required="">
                            @error('celular')
                                <p class="bg-red-600 text-white my-2 text-sm p-2 text-center">{{ $message }}</p>
                            @enderror
                        </div>


                        <div>

                            <label for="small"
                                class="block mb-2 text-sm font-medium text-white dark:text-white">Semestre</label>
                            <select type="semestre" name="semestre" id="semestre"
                                class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Escoja un semestre</option>
                                <option value="1">1 Semestre</option>
                                <option value="2">2 Semestre</option>
                                <option value="3">3 Semestre</option>
                                <option value="4">4 Semestre</option>
                                <option value="5">5 Semestre</option>
                                <option value="6">6 Semestre</option>
                                <option value="7">7 Semestre</option>
                                <option value="8">8 Semestre</option>
                                <option value="9">9 Semestre</option>
                                <option value="10">10 Semestre</option>
                            </select>
                            @error('semestre')
                                <p class="bg-red-600 text-white my-2 text-sm p-2 text-center">{{ $message }}</p>
                            @enderror
                        </div>



                        <div>

                            <label for="small"
                                class="block mb-2 text-sm font-medium text-white dark:text-white">Programa
                                Academico</label>
                            <select type="ProgramaAcademico" name="ProgramaAcademico" id="ProgramaAcademico"
                                class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Escoja su facultad</option>
                                <option value="Teleco">Teleco</option>
                                <option value="Meca">Meca</option>
                                <option value="Negocios">Negocios</option>
                                <option value="Industrial">Industrial</option>

                            </select>
                            @error('ProgramaAcademico')
                                <p class="bg-red-600 text-white my-2 text-sm p-2 text-center">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>

                            <label for="small"
                                class="block mb-2 text-sm font-medium text-white dark:text-white">Genero</label>
                            <select type="genero" name="genero" id="genero"
                                class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Escoja su genero</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                                <option value="NB">No Binario</option>

                            </select>
                            @error('ProgramaAcademico')
                                <p class="bg-red-600 text-white my-2 text-sm p-2 text-center">{{ $message }}</p>
                            @enderror
                        </div>


                        <div>
                            <label for="direccion"
                                class="block mb-2 text-sm font-medium text-white dark:text-white">Direccion</label>
                            <input type="direccion" name="direccion" id="direccion"
                                class="bg-gray-50 border border-gray-300 text-black sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Escriba su direccion" required="">
                            @error('direccion')
                                <p class="bg-red-600 text-white my-2 text-sm p-2 text-center">{{ $message }}</p>
                            @enderror
                        </div>


                        <div>
                            <label for="descripcion"
                                class="block mb-2 text-sm font-medium text-white dark:text-white">Descripcion</label>
                            <input type="descripcion" name="descripcion" id="descripcion"
                                class="bg-gray-50 border border-gray-300 text-black sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Escriba su descripcion" required="">
                            @error('descripcion')
                                <p class="bg-red-600 text-white my-2 text-sm p-2 text-center">{{ $message }}</p>
                            @enderror
                        </div>



                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-white dark:text-white">Contraseña</label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-black sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="">
                            @error('password')
                                <p class="bg-red-600 text-white my-2 text-sm p-2 text-center">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="confirm-password"
                                class="block mb-2 text-sm font-medium text-white dark:text-white">Confirmar
                                contraseña</label>
                            <input type="confirm-password" name="confirm-password" id="confirm-password"
                                placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-black sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="">
                            @error('confirm-password')
                                <p class="bg-red-600 text-white my-2 text-sm p-2 text-center">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="flex items-center h-5">
                                <input id="terms" aria-describedby="terms" type="checkbox"
                                    class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"
                                    required="">
                            </div>
                            
                            <div class="ml-3 text-sm">
                                <label for="terms" class="font-light text-white dark:text-gray-300">I accept the <a
                                        class="font-medium text-primary-600 hover:underline dark:text-primary-500"
                                        href="#">Terms and Conditions</a></label>
                            </div>
                        </div>
                        <br>
                        <button type="submit" value="registrarse"
                            class=" flex flex-col items-center w-full text-white bg-slate-500 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                            Crear una cuenta
                        </button>
                        <br>
                        <p class="text-sm font-light text-white dark:text-gray-400 text-center">
                            Already have an account? <a href="/login"
                                class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login here</a>
                        </p>
                    </form>
                </div>
            </div>


        </div>
    </section>



</body>

</html>