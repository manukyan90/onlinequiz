<?php

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
    return view('welcome');
});

Auth::routes(['login' => true, 'register' =>false, ]);




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.home');

});









/*Route::get('/admin', function () {
       if(Auth::check()){
            return view('welcome');
        }
       return redirect(\route('login'));
});*/
