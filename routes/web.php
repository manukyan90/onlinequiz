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
    Route::get('/subject', [App\Http\Controllers\SubjectController::class, 'index'])->name('admin.subject');
    Route::get('/create', [App\Http\Controllers\SubjectController::class, 'create'])->name('admin.subject.create');
    Route::post('/store', [App\Http\Controllers\SubjectController::class, 'store'])->name('admin.subject.store');
    Route::get('/edit/{id}', [App\Http\Controllers\SubjectController::class, 'edit'])->name('admin.subject.edit');
    Route::post('/update/{id}', [App\Http\Controllers\SubjectController::class, 'update'])->name('admin.subject.update');
    Route::post('/delete/{id}', [App\Http\Controllers\SubjectController::class, 'delete'])->name('admin.subject.delete');

    Route::resource('teachers',App\Http\Controllers\TeacherController::class);

    Route::resource('students',App\Http\Controllers\StudentController::class);

    Route::resource('questions', App\Http\Controllers\QuestionController::class);

    Route::resource('answers', App\Http\Controllers\AnswerController::class);

});
























/*Route::get('/admin', function () {
       if(Auth::check()){
            return view('welcome');
        }
       return redirect(\route('login'));
});*/
