@extends('layouts.app') @section('content')


<script>
    function buscar() {
        document.getElementById("myform").submit();
    }

</script>

<br class="hidden-xs">
<div class="productos">
    <div class="row">
        <div class="col-sm-4 col-md-6">
            <a href="#">
                <h3>Nuestros Productos</h3>
            </a>
        </div>
        <div class="col-sm-7 col-sm-offset-1 col-md-5 col-md-offset-1 derecha buscador">
            <form id="myform" action="productobuscarcliente" method="POST">
                <input type="text" name="nombre" placeholder="busque en nuestro catalogo">
                <a href="#" id="buscar" onclick="buscar();"><i class="fa fa-search"></i></a>
            </form>
        </div>
    </div>
    <br>
    <div class="row galeria">
        @foreach ($productos as $producto)
        <div class="producto">
            <div class="contenido">
                <div class="imagen">
                    <img src="/buscarimagen?imagen={{$producto->id}}.jpg" alt="">
                    <span>{{$producto->precio}}</span>
                </div>
                <p>{{$producto->descripcion}}</p>
            </div>
        </div>
        @endforeach
    </div>

    <br>
    <hr>
    <br class="hidden-xs">
    <a href="#">
        <h3>Casos de Exito</h3>
    </a>
    <br>
    <div class="row noticias">
        <div class="col-sm-6 col-md-5 col-md-offset-1">
            <img src="images/n1.jpg" alt="">
        </div>
        <div class="col-sm-6 col-md-5">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>
    <div class="row noticias">
        <div class="col-sm-6 col-md-5 col-md-offset-1 hidden-xs">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="col-sm-6 col-md-5  ">
            <img src="images/n2.jpg" alt="">
        </div>
        <div class="col-md-5 visible-xs">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua.</p>
        </div>

    </div>
</div>
@endsection