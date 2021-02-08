<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatsController;
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

\Illuminate\Support\Facades\Auth::routes();

Route::get('/home',[ChatsController::class,'index']);
Route::get('/messages',[ChatsController::class,'fetchMessages']);
Route::Post('/messages',[ChatsController::class,'sendMessage']);
