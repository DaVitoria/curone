<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AverController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\PackController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PublicTenderController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\VacancieController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', function () {
    return view('home');
});

// Route::get('/pages', function(){
//     return view('index');
// })->name('vacancie');

Route::get('/pages', [PageController::class, 'index'])->name('page.index');
Route::get('/pack', [PackController::class, 'index'])->name('pack.index');
// Route::get('/vacancie/{id}', [VacancieController::class, 'show'])->name('pack.show');
Route::get('/pack', [PackController::class, 'show'])->name('pack.show');
Route::get('/aver', [AverController::class, 'index'])->name('aver.index');

Route::controller(AuthController::class)->group(function(){
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
    Route::get('index', 'index')->name('adminHome');
});



Route::middleware('auth')->group(function(){
    // route::get('dashboard', function(){

    //     return view('dashboard');
    // })->name('dashboard');
    Route::get('/auth', [AuthController::class, 'dashboard'])->name('dashboard');

    Route::controller(CandidateController::class)->prefix('candidates')->group(function(){
        Route::get('', 'index')->name('candidates');
    });

    Route::controller(VacancieController::class)->prefix('vacancie')->group(function(){
        Route::get('', 'index')->name('vacancies');
    });

    Route::controller(PublicTenderController::class)->prefix('publictender')->group(function(){
        Route::get('', 'index')->name('publictenders');
    });

    Route::controller(ResultController::class)->prefix('results')->group(function(){
        Route::get('', 'index')->name('results');
    });
});

Route::get('/candidates/create', [CandidateController::class, 'create'])->name('candidate.create');
Route::get('pdf-export', [CandidateController::class, 'exportPdf'])->name('gerarPdf');
Route::post('/candidates', [CandidateController::class, 'store'])->name('candidate.store');
Route::get('/candidates/{id}/edit', [CandidateController::class, 'edit'])->name('candidate.edit');
Route::put('/candidates/{id}', [CandidateController::class, 'update'])->name('candidate.update');
Route::get('/candidates/{id}', [CandidateController::class, 'show'])->name('candidate.show');
Route::delete('/candidates/{id}', [CandidateController::class, 'destroy'])->name('candidate.destroy');

Route::get('/vacancie/create', [VacancieController::class, 'create'])->name('vacancie.create');
Route::post('/vacancie', [VacancieController::class, 'store'])->name('vacancie.store');
Route::get('/vacancie/{id}/edit', [VacancieController::class, 'edit'])->name('vacancie.edit');
Route::put('/vacancie/{id}', [VacancieController::class, 'update'])->name('vacancie.update');
Route::get('/vacancie/{id}', [VacancieController::class, 'show'])->name('vacancie.show');
Route::delete('/vacancie/{id}', [VacancieController::class, 'destroy'])->name('vacancie.destroy');

Route::get('/publictender/create', [PublicTenderController::class, 'create'])->name('publictender.create');
Route::post('/publictender', [PublicTenderController::class, 'store'])->name('publictender.store');
Route::get('/publictender/{id}/edit', [PublicTenderController::class, 'edit'])->name('publictender.edit');
Route::put('/publictender/{id}', [PublicTenderController::class, 'update'])->name('publictender.update');
Route::get('/publictender/{id}', [PublicTenderController::class, 'show'])->name('publictender.show');
Route::delete('/publictender/{id}', [PublicTenderController::class, 'destroy'])->name('publictender.destroy');

Route::get('/results/create', [ResultController::class, 'create'])->name('result.create');
Route::post('/results', [ResultController::class, 'store'])->name('result.store');
Route::get('/results/{id}/edit', [ResultController::class, 'edit'])->name('result.edit');
Route::put('/results/{id}', [ResultController::class, 'update'])->name('result.update');
Route::get('/results/{id}', [ResultController::class, 'show'])->name('result.show');
Route::delete('/results/{id}', [ResultController::class, 'destroy'])->name('result.destroy');

