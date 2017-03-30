<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Atributo;
use Storage;

class ProductoController extends Controller
{
    public function productonew(Request $request){
        return view('productocreate');
    }

    public function productocreate(Request $request){
        
        $id=$request->input('producto_id');
        $file = request()->file('imagen');

        $file->storeAs('/images/productos/', $id.'.jpg');

        return redirect('productonew');
    }

    public function buscarimagen(Request $request){
        $imagen=$request->input('imagen');
        $file = Storage::get('images/productos/'.$imagen);

        return response($file, 200)->header('Content-Type', 'image/jpg');
    }

    public function test(Request $request){
        $data=$request->input('data');
        $todo=$request->all();
        $producto=$request->input('producto');
        $producto = json_decode($producto, true);

        $nombre=$producto['nombre'];
        $descripcion=$producto['descripcion'];
        $precio=$producto['precio'];

        $producto2 = new Producto;
        $producto2->nombre=$nombre;
        $producto2->descripcion=$descripcion;
        $producto2->precio=$precio;
        $producto2->save();
        

        $datos = json_decode($data, true);

        foreach($datos as $item){
            $atributo = new Atributo;
            $atributo->producto_id=$producto2->id;
            $atributo->nombre=$item['propiedad'];
            $atributo->valor=$item['valor'];
            $atributo->save();
        }

        return response()->json(['data'=> $datos, 'todo' =>$todo, 'producto' =>$producto2]);
    }



}
