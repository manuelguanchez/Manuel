@extends('layouts.app')
@section('title','Publicar')

@section('content')

<form class="form-group" method="POST" action="/notas" enctype="multipart/form-data">
    @csrf

<div class="form-group">
<label for="">materias</label>
<input type="text" name="nombre" class="form-control">
</div>

<div class="form-group">
<label for="">puntuacion</label>
<input type="text" name="putuacion" class="form-control">
</div>

<div class="form-group">
<label for="">fecha</label>
<input type="text" name="fecha" class="form-control">
</div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection
