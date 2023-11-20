<?php

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth', 'disablebackbtn']], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/input', [HomeController::class, 'input'])->name('document.input');
    Route::get('/input/{document}', [DocumentController::class, 'show'])->name('document.show');
    Route::get('/input/{document}/edit', [DocumentController::class, 'edit'])->name('document.edit');
    Route::put('/input/{document}', [DocumentController::class, 'update'])->name('document.update');
    Route::post('/documents', [DocumentController::class, 'store'])->name('document.create');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::middleware('admin')->group(
        function () {
            Route::get('/all', [DocumentController::class, 'index'])->name('document.showAll');
            Route::delete('/all/{document}', [DocumentController::class, 'delete'])->name('document.delete');
        }
    );
});
require __DIR__ . '/auth.php';
