<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){// metodo para listar los productos
        return view('products.index');
    } 
    public function create(){ //formulario para crear un producto
        return view('products.create');
    }
    public funCtion show($name,$categoria = null){ // mostrar un producto el detalle
        return view('products.show');
    }
}
