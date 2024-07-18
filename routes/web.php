<?php

use App\Http\Controllers\PageController;
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

//Route::get('/', function () {
//    return view('home');
//})->name("home");

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about-us', [PageController::class, 'aboutUs'])->name('about-us');
Route::get('/experts', [PageController::class, 'experts'])->name('experts');
Route::get('/publications/{section}', [PageController::class, 'publications'])->name('publications');
Route::get('/partners', [PageController::class, 'partners'])->name('partners');
Route::get('/contact-us', [PageController::class, 'contactUs'])->name('contact-us');
Route::get('/research-projects', [PageController::class, 'projects'])->name('projects');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
    Route::get('/pages', [PageController::class, 'index'])->name('pages.index');
    Route::get('/pages/{id}', [PageController::class, 'show'])->name('pages.show');
    Route::post('/pages/{id}', [PageController::class, 'update'])->name('pages.update');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
