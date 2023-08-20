<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;


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
    return view('home');
});

Route::POST('/register', [UserController::class, 'register']);
Route::POST('/logout', [UserController::class, 'logout']);
Route::POST('/login', [UserController::class, 'login']);

//blog post related tasks
Route::POST('/create-post', [postController::class, 'createPost']);