<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CatController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[AdminController::class,'admin']);
Route::get('catPage/',[CatController::class,'cat']);
Route::post('add_cat/',[CatController::class,'insert']);
Route::get('catPage/',[CatController::class,'show']);

Route::get('edit_cat/{id}', [CatController::class, 'edit_cat']);
Route::post('update_cat/{id}', [CatController::class, 'update_cat']);