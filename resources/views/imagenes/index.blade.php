<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- <x-jet-welcome /> -->

                <a href="{{ route('imagenes.create') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                    <i class="far fa-images fill-current w-4 h-4 mr-2"></i>
                    <span>Cargar Imagen</span>
                </a>
                <br>
                <!-- <a type="button" href="{{ route('imagenes.create') }}" class="bg-indigo-500 px-12 py-2 rounded text-gray-200 font-semibold hover:bg-indigo-800 transition duration-200 each-in-out"> Agregar </a> -->
                <br>
                <table class="table-fixed w-full">
                    <thead>
                        <tr class="bg-gray-800 text-white">
                            <th style="display: none;">Id</th>
                            <th class="border px-4 py-2">Titulo</th>
                            <th class="border px-4 py-2">Descripcion</th>
                            <th class="border px-4 py-2">Imagen</th>
                            <th class="border px-4 py-2">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($imagenes as $imagen)
                        <tr>
                            <td style="display: none;">{{$imagen->id}}</td>
                            <td>{{$imagen->imagenTitulo}}</td>
                            <td>{{$imagen->imagenDescripcion}}</td>
                            <td class="border px-14 py-1">
                                <img src="/imagen/{{$imagen->imagenUrl}}" width="60%">
                            </td>
                            <td class="border px-4 py-2">
                                <div class="flex justify-center rounded-lg text-lg" role="group">
                                    <!-- botón editar
                                    <a href="{{ route('imagenes.edit', $imagen->id) }}" class="rounded bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4">Editar</a> -->

                                    <!-- botón borrar -->
                                    <form action="{{ route('imagenes.destroy', $imagen->id) }}" method="POST" class="formEliminar">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="rounded bg-pink-400 hover:bg-pink-500 text-white font-bold py-2 px-4">Borrar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
                <div>
                    {!! $imagenes->links() !!}
                </div>

            </div>
        </div>

    </div>
</x-app-layout>

<script>
    (function() {
        'use strict'
        //debemos crear la clase formEliminar dentro del form del boton borrar
        //recordar que cada registro a eliminar esta contenido en un form  
        var forms = document.querySelectorAll('.formEliminar')
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    event.preventDefault()
                    event.stopPropagation()
                    Swal.fire({
                        title: '¿Confirma la eliminación de la imagen?',
                        icon: 'info',
                        showCancelButton: true,
                        confirmButtonColor: '#20c997',
                        cancelButtonColor: '#6c757d',
                        confirmButtonText: 'Confirmar'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            this.submit();
                            Swal.fire('¡Eliminado!', 'La imagen ha sido eliminada exitosamente.', 'success');
                        }
                    })
                }, false)
            })
    })()
</script>