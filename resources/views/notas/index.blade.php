<x-app-layout>
    @vite(['resources/css/app.css','resources/js/app.js'])

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Alumno
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Asignatura
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Trimestre
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nota
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Acción
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($notas as $nota)
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$nota->alumno->nombre}}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$nota->asignatura->denominacion}}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$nota->trimestre}}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$nota->nota}}
                        </th>
                        <td class="px-6 py-4">
                            <a href="{{route("notas.edit", $nota)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                            <form method="POST" action="{{route("notas.destroy", $nota)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
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
    <a href="{{route("notas.create")}}">Crear</a>
</x-app-layout>
