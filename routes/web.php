<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyFirstController;
use App\View\Components\Alert;
use App\Http\Controllers\AlertController;

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

Route::match(['get', 'post'], '/form', [MyFirstController::class, 'form']);

Route::get('/', [AlertController::class, 'show']);

// Route::get('/', [MyFirstController::class, 'show']);


// Route::get('/new/{id?}',[MyFirstController::class, 'show']);

// Route::get('/smt/{product?}', function ($product = "нету") {
//     return $product;
// });

// Route::get('/post/{id}', function ($id) {
//     return 'пост ' . $id;
// });


// Route::get('/post/all', function () {
//     return 'all';
// });


// Route::prefix('blog')->group(function () {
//     Route::get('/post/all', function () {
//         return 'all';
//     });
//     Route::get('/post/{id}', function ($id) {
//         return $id;
//     });
// });

// Route::prefix('blog')->group(function () {
//     Route::prefix('post')->group(function () {
//         Route::get('/all', function () {
//         return 'all';
//     });
//         Route::get('/{id}', function ($id) {
//         return $id;
//     });
// });
// });

// Route::prefix('blog/post')->group(function () {
//     Route::get('/all', function () {
//         return 'all';
//     });
//     Route::get('/{id}', function ($id) {
//         return $id;
//     });
// });