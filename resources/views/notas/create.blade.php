<x-app-layout>
    <form class="mx-auto w-1/2" action="{{route("notas.store")}}" method="POST">
        @csrf
        <div class="mb-5">
          <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alumno</label>
          <select name="alumno">
          @foreach ($alumnos as $alumno)
            <option value="{{$alumno->id}}">{{$alumno->nombre}}</option>
          @endforeach
        </select>
        <select name="asignatura">
            @foreach ($asignaturas as $asignatura)
              <option   value="{{$asignatura->id}}">{{$asignatura->denominacion}}</option>
            @endforeach
          </select>

        </div>
        <div class="mb-5">
            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Asignatura</label>
                <select name="nota" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                    @for ($n = 0; $n < 11; $n++)
                        <option value="{{$n}}">{{$n}}</option>
                    @endfor
                </select>
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">trimestres</label>

                <select name="trimestre" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
          </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Crear</button>
      </form>

    </x-app-layout>
