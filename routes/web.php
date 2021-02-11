<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function (User $user) {
    return view('welcome')->with([
        'user' => $user
    ]);
});

Auth::routes();


Route::resource('users', App\Http\Controllers\HomeController::class)->middleware('can:admin-user');
/* Route::get('/users', [App\Http\Controllers\HomeController::class, 'index'])->middleware('can:admin-user')->name('users');
*/
Route::resource('invest', App\Http\Controllers\InvestmentController::class); 
