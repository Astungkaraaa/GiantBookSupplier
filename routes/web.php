<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

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

Route::get('/', [AppController::class, 'index']);

Route::get('/detail/{book}', [AppController::class, 'detail']);

Route::get('/category/{category}', [AppController::class, 'category']);


Route::get('/contact', function () {
    return view('contact', [
        'categories' => Category::all()]);
});

Route::get('/publisher', [AppController::class, 'publisher']);
Route::get('/pubdet/{publisher}', [AppController::class, 'pubdet']);
