@extends('layouts.app') @section('content')

<style>
    img {
        width: 100%;
        height: 300px;
    }
</style>

<br>
<br>
<div class="">
    <form action="productobuscarcliente" method="POST">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Busque en nuestro catalogo">
        </div>
        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i> Buscar</button>
    </form>
</div>

<br>
<br>
<div class="">
    @foreach ($productos as $producto)
    <a href="/detalle/{{$producto->id}}">
        <div class="producto col-md-4">
            <div class="contenido">
                <div class="imagen">
                    <img src="/buscarimagen?imagen={{$producto->id}}.jpg" alt="">
                </div>
                <h4>{{$producto->nombre}}</h4>
                <h5>{{$producto->precio}}</h5>
                <p>{{$producto->descripcion}}</p>
            </div>
        </div>
    </a>
    @endforeach
</div>


@endsection