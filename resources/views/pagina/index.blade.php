@include('/navegacion/navbarCliente')

<h1 style="margin: 3rem;" 
    class="text-center m-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
    Bienvenido! 
    <span
        class="m-4 underline underline-offset-3 decoration-8 decoration-blue-400 dark:decoration-blue-600">Selecciona los
        productos de tu preferencia
    </span>
</h1>
<div  class="grid grid-cols-2 md:grid-cols-3 gap-4 max-w-7xl mx-auto justify-items-center">
    @foreach ($inventario as $item)
        <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <img class="p-8 rounded-t-lg mx-auto" src="{{ asset('storage/uploads/' . $item->image) }}" alt="{{ $item->name }}" />
            <div class="px-5 pb-5">
                <h2 style="color: #ff6000;" class="mb-2 text-xl font-semibold">
                        {{$item->name}}
                </h2>
                <p class="mb-2">
                    {{$item->description}}
                </p>
                <h6 class="italic">Stock: {{$item->quantity}}</h6>
                <div class="flex items-center justify-between">
                    <span style="color: #ff6000;" class="text-3xl font-bold text-gray-900 dark:text-white">
                        ${{$item->price}}
                    </span>
                    <a href="#"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Addto cart
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>