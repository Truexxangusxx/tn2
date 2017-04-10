@extends('layouts.app') @section('content')


<script>
    var app = angular.module('app', [], function ($interpolateProvider) {
        $interpolateProvider.startSymbol('[[');
        $interpolateProvider.endSymbol(']]');
    });

    app.controller('mainCtrl', function ($scope, $http) {

        $scope.data = [];
        $scope.producto = {};
        $scope.imagen;
        $scope.uploadme;


        $scope.enviar = function () {
            $http({
                method: 'POST',
                url: '/test',
                headers: { 'Content-Type': 'multipart/form-data' },
                params: { "data": JSON.stringify($scope.data), "producto": JSON.stringify($scope.producto) }
            }).then(function successCallback(response) {
                console.log(response.data.producto.id);
                $scope.producto.id = response.data.producto.id;
                setTimeout(function () {
                    document.getElementById("myform").submit();
                }, 500);


            }, function errorCallback(response) {
                console.log('un error ocurrio');
            });
        };

        $scope.agregar = function () {
            $scope.data.push({ propiedad: "", valor: "" });
        };

        $scope.remove = function (item) {
            var index = $scope.data.indexOf(item);
            $scope.data.splice(index, 1);
        }

    });

    app.directive("fileread", [
        function () {
            return {
                scope: {
                    fileread: "="
                },
                link: function (scope, element, attributes) {
                    element.bind("change", function (changeEvent) {
                        var reader = new FileReader();
                        reader.onload = function (loadEvent) {
                            scope.$apply(function () {
                                scope.fileread = loadEvent.target.result;
                            });
                        }
                        reader.readAsDataURL(changeEvent.target.files[0]);
                    });
                }
            }
        }
    ]);

</script>

<div class="row">
    <a href="/productonew"><h3>Nuevo</h3></a>
    <a href="/productobuscar"><h3>buscar</h3></a>
</div>
<div class="row" ng-controller="mainCtrl">
    <div class="col-xs-12 col-md-6">
        <h1>Nuevo Producto</h1>
        <form action="productocreate" method="POST" id="myform" enctype="multipart/form-data">
            <input type="hidden" name="producto_id" ng-model="producto.id" value="[[producto.id]]" />
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" ng-model="producto.nombre">
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="text" class="form-control" id="precio" name="precio" placeholder="Precio" ng-model="producto.precio">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <textarea rows="3" cols="20" class="form-control" id="descripcion" name="descripcion" ng-model="producto.descripcion"></textarea>
            </div>
            <div class="form-group">
                <label for="imagen">File input</label>
                <input type="file" name="imagen" fileread="imagen" />
            </div>
            <button type="button" class="btn btn-default" ng-click="enviar()"><i class="fa fa-save"></i> Guardar</button>
        </form>
        <br>
        <br>
        <img style="width: 100%" src="[[imagen]]" alt="">

    </div>
    <div class="col-md-6">
        <h1>Propiedades <button type="button" class="btn btn-default" ng-click="agregar()"><i class="fa fa-plus"></i></button></h1>  
        <br>
        <div ng-repeat="item in data" class="row form-group">
            <div class="col-xs-5">
                <input type="text" name="propiedad" class="form-control" ng-model="item.propiedad">
            </div>
            <div class="col-xs-5">
                <input type="text" name="valor" class="form-control" ng-model="item.valor">
            </div>
            <div class="col-xs-2">
                <a class="btn btn-default" ng-click="remove(item)"><i class="fa fa-minus"></i></a>
            </div>
        </div>
        <br>

    </div>

</div>



@endsection