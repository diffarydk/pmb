<?php

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Models\Document;
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
    Route::get('/input', [HomeController::class, 'input'])->name('documents.input');
    Route::get('/input/{document}', [DocumentController::class, 'show'])->name('documents.show');
    Route::post('/documents', [DocumentController::class, 'store'])->name('document.create');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::middleware('admin')->group(
        function () {
            Route::get('/all', [DocumentController::class, 'index'])->name('documents.showAll');
        }
    );
});
require __DIR__ . '/auth.php';
