@extends('adminlte::page')

@section('title', 'Divisiones')

@section('content_header')
    <h1>Registrar Division</h1>
@stop

@section('content')
<form action="/divisions" method="POST">
@csrf

<div class="mb-3">
    <label for="" class="form-label">Código</label>
    <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1">
</div>

<div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="2">
</div>

<div class="mb-3">
<label for="" class="form-label">Municipio</label>
<input id="municipio" name="municipio" type="text" class="form-control" tabindex="3">
</div>

<div class="mb-3">
<label for="" class="form-label">Zona</label>
<input id="zona" name="zona" type="text" class="form-control" tabindex="4">
</div>

<div class="mb-3">
<label for="" class="form-label">Calle</label>
<input id="calle" name="calle" type="text" class="form-control" tabindex="5">
</div>

<div class="mb-3">
<label for="" class="form-label">Oficina</label>
<input id="oficina" name="oficina" type="text" class="form-control" tabindex="6">
</div>

<a href="/divisions" class="btn btn-secondary" tabindex="7">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="7">Guardar</button>

</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop