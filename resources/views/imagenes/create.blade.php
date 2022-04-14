<form action="{{ route('imagenes.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('imagenes.form', ['modo'=>'Registrar']);
</form>
