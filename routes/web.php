<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    CourseController,
    UsercController,
    UserController,
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/', function () {
    return view('dashboard');
});

Route::get('/courses', [CourseController::class, 'index'])->name('curso');
Route::get('/courses/create', [CourseController::class, 'create'])->name('cria_curso');

Route::get('/courses/category', [CourseController::class, 'category'])->name('categoria');
Route::get('/students', [UsercController::class, 'student'])->name('student');


Route::get('/instrutores', [UsercController::class, 'instrutor'])->name('instrutor');
