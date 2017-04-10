@extends('layouts.app') @section('content')

<style>
    img {
        width: 100%;
        height: 300px;
    }
</style>

<div class="row">
    <a href="/productonew">
        <h3>Nuevo</h3>
    </a>
    <a href="/productobuscar">
        <h3>buscar</h3>
    </a>
</div>

<div class="row">
    <form action="productobuscar" method="POST">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
        </div>
        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i> Buscar</button>
    </form>
</div>
<br>
<br>
<div class="row">
    @foreach ($productos as $producto)
    <a href="productoupdate/{{$producto->id}}">
        <div class="producto col-md-4">
            <div class="contenido">
                <div class="imagen">
                    <img src="/buscarimagen?imagen={{$producto->id}}.jpg" alt="">
                </div>
                <span>{{$producto->nombre}}</span>
                <p>{{$producto->descripcion}}</p>
            </div>
        </div>
    </a>
    @endforeach
</div>

@endsection