<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Peliculas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nombre
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Director
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Genero
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Actor1
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Actor2
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Accion</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    @if($peliculas->count())  
                    @foreach($peliculas as $pelicula) 
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                {{$pelicula->id}}
                            </th>
                            <td class="px-6 py-4">
                                {{$pelicula->nombre}}
                            </td>
                            <td class="px-6 py-4">
                                {{$pelicula->director}}
                            </td>
                            <td class="px-6 py-4">
                                {{$pelicula->genero}}
                            </td>
                            <td class="px-6 py-4">
                                {{$pelicula->actor1}}
                            </td>
                            <td class="px-6 py-4">
                                {{$pelicula->actor2}}
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="{{action('App\Http\Controllers\RentaController@create', $pelicula->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Rentar</a>
                            </td>
                        </tr>
                        @endforeach 
                        @else
                        <tr>
                        <td colspan="8">No hay registro !!</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>