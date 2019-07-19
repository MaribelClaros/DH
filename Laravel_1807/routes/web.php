<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/miPrimeraRuta", function() {
  return "Creé mi primer ruta en Laravel";
});

Route::get("/esPar/{numero}", function($numero) {
  if($numero % 2 == 0)
  {
    return "El número $numero es par";
  }
  return "El número $numero es impar";
});

Route::get("/sumar/{numero1}/{numero2}/{numero3?}", function($numero1, $numero2, $numero3 = null) {
  if($numero3)
  {
    $total = $numero1 + $numero2 + $numero3;
    return "$numero1 + $numero2 + $numero3 = $total";
  }
  $total = $numero1 + $numero2;
  return "$numero1 + $numero2 = $total";
});

Route::get("/peliculas", function() {
  $peliculas = ["Avatar", "Star Wars", "Orgullo y Prejuicio", "Spider Man", "Jamas besada"];
  return view("peliculas", compact("peliculas"));
});
