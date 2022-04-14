<form action="{{ url('/registroVale/'.$registroVale->id ) }}" method="post" enctype="multipart/form-data">>
    @csrf
    {{ method_field('PATCH') }}
    @include('imagenes.form', ['modo'=>'Guardar cambios']);
</form>