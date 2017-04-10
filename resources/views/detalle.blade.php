@extends('layouts.app') @section('content')
<style>
    img {
        width: 100%;
        height: 300px;
    }
    .detalle{
        font-size: 24px;
    }
</style>
<br>
<br>
<br>
<div class="row">
    <div class="col-xs-12 col-md-6">
        <img src="/buscarimagen?imagen={{$producto->id}}.jpg" alt="">
        <h2>{{$producto->nombre}}</h2>
        <h3>{{$producto->precio}}</h3>
        <p>{{$producto->descripcion}}</p>
    </div>
    <div class="col-xs-12 col-md-6 detalle">
        @foreach ($data as $item)
            <strong>{{$item->nombre}}:</strong>
            <span>{{$item->valor}}</span>
        @endforeach

    </div>

</div>



@endsection