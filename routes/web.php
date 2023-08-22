<?php

use App\Http\Controllers\RestaurantsController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PromoController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

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
Route::get("/", function() {
    return redirect("/home");
  });

Route::get('/home', [HomeController::class, 'create']);

Route::get('/restaurants', [RestaurantsController::class, 'create']);

Route::get('/menu/{id}', [MenuController::class, 'create']);

