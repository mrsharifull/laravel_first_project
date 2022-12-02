<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;

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
Route::get('category/',[CategoryController::class,'categoryPage']);
Route::post('add_category/',[CategoryController::class,'insert']);
Route::get('category/',[CategoryController::class,'show']);

Route::get('edit_cat/{id}',[CategoryController::class,'editCat']);
Route::post('update_cat/{id}',[CategoryController::class,'updateCat']);
Route::get('delete_cat/{id}',[CategoryController::class,'deleteCat']);