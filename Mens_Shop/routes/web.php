<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CateController;
use App\Http\Controllers\AdminController;






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
Route::get('/', [HomeController::class, 'homepage']);
Route::get('adminPage/', [AdminController::class, 'admin']);
Route::get('catShow/', [CateController::class, 'categories']);
Route::post('add_cat/', [CateController::class, 'insert']);

Route::get('edit_category/{id}', [CateController::class, 'editCategory']);
Route::post('update_category/{id}', [CateController::class, 'updateCategory']);
Route::get('delete_category/{id}', [CateController::class, 'deleteCategory']);