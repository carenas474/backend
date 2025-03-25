<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){// metodo para listar los productos
        echo "listado de productos del ecommerce";
    } 
    public function create(){ //formulario para crear un producto
        echo"FORMULARIO PARA CREAR UN PRODUCTO";
    }
    public funCtion show($name,$categoria = null){ // mostrar un producto el detalle
            if ($categoria ==null){
                echo "EL PRODUCTO ES: $name";
            }else{
                echo"El producto es $name, y su categoria es $categoria";
            }
    }
}
