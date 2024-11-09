@include('/navegacion/navegacion')

<header>
    <div
        style="background-image: url('storage/background.jpg'); background-repeat: no-repeat; background-size: cover; height:50rem; display: flex; justify-content: center; align-items: center;">
        <div style="height: 30rem; background-color: #ff6000; width: 55rem; display: grid; justify-content: center; align-items: center; border-radius: 3px;">
            <h1
                class="text-center mb-2 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                Bienvenido!</h1>
            <center>
                <a href="/sesiones/login"
                    class="text-center inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Iniciar Sesión
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </center>
        </div>
    </div>
</header>
