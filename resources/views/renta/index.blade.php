<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Rentas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="pull-right">
                <div class="block mb-8">
                    <a href="{{ route('renta.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" >Añadir Renta</a>
                </div>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                PELICULA_ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                PELICULA
                            </th>
                            <th scope="col" class="px-6 py-3">
                                FECHA DE REGISTRO
                            </th>
                            <th scope="col" class="px-6 py-3">
                                FECHA DE ENTREGA
                            </th>
                            <th scope="col" class="px-6 py-3">
                                FECHA DE DEVOLUCIÓN
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    @if($rentas->count())  
                    @foreach($rentas as $renta) 
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                {{$renta->id}}
                            </th>
                            <td class="px-6 py-4">
                                {{$renta->pelicula_id}}
                            </td>
                            <td class="px-6 py-4">
                                {{$renta->nombre}}
                            </td>
                            <td class="px-6 py-4">
                                {{$renta->f_registro}}
                            </td>
                            <td class="px-6 py-4">
                                {{$renta->f_entrega}}
                            </td>
                            <td class="px-6 py-4">
                                {{$renta->f_devolucion}}
                            </td>
                            <td class="px-6 py-4 text-left">
                                <a href="{{action('App\Http\Controllers\RentaController@edit', $renta->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
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