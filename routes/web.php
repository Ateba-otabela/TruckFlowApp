<?php

use App\Http\Controllers\AdminController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::post('/track', [AdminController::class, 'track'])->name('track');
Route::get('/admin', [AdminController::class, 'adminDashboard'])->name('adminDashboard');
Route::get('/shippment', [AdminController::class, 'shippment'])->name('shippment');
Route::post('/shipping', [AdminController::class, 'shipping'])->name('shipp');
Route::get('/showtracking/{id}', [AdminController::class, 'showtracking'])->name('showtracking');
Route::post('/showtracking/{id}', [AdminController::class, 'updatetracking'])->name('updatetracking');
Route::get('/show_tracking/{tracking_number}', [AdminController::class, 'show_tracking'])->name('show_tracking');
require __DIR__.'/auth.php';
