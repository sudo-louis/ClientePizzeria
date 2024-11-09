@include('/navegacion/navegacion')

<h1 class="text-center m-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Para <mark class="px-2 text-white bg-blue-600 rounded dark:bg-blue-500">Iniciar Sesión</mark> ingresa tus credenciales</h1>
<form class="max-w-sm mx-auto" action="/sesiones/login" method="POST">
    @csrf
    <div class="mb-5">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ingresa tu Correo Electrónico</label>
        <input type="email" id="email" name="email"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="tucorreo@gmail.com" required />
    </div>
    <div class="mb-5">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ingresa tu Contraseña</label>
        <input type="password" id="password" name="password" placeholder="******"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            required />
    </div>
    <div class="flex items-start mb-5">
        <div class="flex items-center h-5">
            <input id="remember" type="checkbox" value="remember"
                class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800"
                required />
        </div>
        <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Recordarme</label>
    </div>
    <div class="flex items-start mb-5">
        <p>Aún no tienes una cuenta? -></p>
        <a class="italic" style="color: blue;" href="/sesiones/register">Quiero Registrarme</a>
    </div>
    <button type="submit"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Iniciar Sesión
    </button>
</form>