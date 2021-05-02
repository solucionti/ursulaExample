<?php

use App\Models\Ferias;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

//    User::create([
//        'name'     => 'Camilo',
//        'email'    => 'camilo@gmail.com',
//        'password' => bcrypt(12345)
//    ]);

//    Ferias::create([
//        'nombre' => 'Mi feria 1' . time()
//    ]);
    return view('welcome');
});

Route::get('/ursula', function () {
    return view('ursula');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
