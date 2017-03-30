@extends('layouts.app') @section('content')
<br class="hidden-xs">
<div class="productos">
    <div class="row">
        <div class="col-sm-4 col-md-6">
            <a href="#">
                <h3>Nuestros Productos</h3>
            </a>
        </div>
        <div class="col-sm-7 col-sm-offset-1 col-md-5 col-md-offset-1 derecha buscador">
            <input type="text" name="nombre" placeholder="busque en nuestro catalogo">
            <i class="fa fa-search"></i>
        </div>
    </div>
    <br>
    <div class="row galeria">
        <div class="producto">
            <div class="contenido">
                <div class="imagen">
                    <img src="images/p1.jpg" alt="">
                    <span>20 s/.</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.</p>
            </div>
        </div>
        <div class="producto">
            <div class="contenido">
                <div class="imagen">
                    <img src="images/p2.jpg" alt="">
                    <span>20 s/.</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.</p>
            </div>
        </div>
        <div class="producto">
            <div class="contenido">
                <div class="imagen">
                    <img src="images/p3.jpg" alt="">
                    <span>20 s/.</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.</p>
            </div>
        </div>
        <div class="producto">
            <div class="contenido">
                <div class="imagen">
                    <img src="images/p1.jpg" alt="">
                    <span>20 s/.</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.</p>
            </div>
        </div>
        <div class="producto">
            <div class="contenido">
                <div class="imagen">
                    <img src="images/p2.jpg" alt="">
                    <span>20 s/.</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.</p>
            </div>
        </div>
        <div class="producto">
            <div class="contenido">
                <div class="imagen">
                    <img src="images/p3.jpg" alt="">
                    <span>20 s/.</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.</p>
            </div>
        </div>
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