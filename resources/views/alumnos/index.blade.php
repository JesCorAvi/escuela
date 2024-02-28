<x-app-layout>
    @vite(['resources/css/app.css','resources/js/app.js'])

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Acción
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alumnos as $alumno)
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$alumno->nombre}}
                        </th>
                        <td class="px-6 py-4">
                            <a href="{{route("alumnos.edit", $alumno)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                            <form method="POST" action="{{route("alumnos.destroy", $alumno)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                @csrf
                                @method('DELETE')
                                <button>Borrar</button>
                            </form>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <a href="{{route("alumnos.create")}}">Crear</a>
</x-app-layout>
