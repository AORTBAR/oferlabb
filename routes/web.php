<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('bienvenida');
});

// Luego, en tu archivo de rutas web.php, puedes asociar esta ruta con el método showLoginForm del controlador LoginController de la siguiente manera:
Route::get('/login', 'App\Http\Controllers\LoginController@muestraLoginForm')->name('bienvenida');
Route::get('/register', function () {return view('registro.blade');
});



