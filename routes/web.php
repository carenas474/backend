<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\HomeController;
use App\Http\Controller\ProductsController;
use PHPUnit\TextUI\XmlConfiguration\Group;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class );

route::prefix('/products')-group(function(){
    Route::get('/products', [ProductsController::class,'index']);
    Route::get('/products/create',  [ProductsController::class,'create']);
    Route::get('/products/{name}/{categoria?}', [ProductsController::class,'show']);
});