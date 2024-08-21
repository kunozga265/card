<?php

use App\Http\Controllers\ExpertController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\UserController;
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
Route::get('/publications', [PageController::class, 'publications'])->name('publications');
Route::get('/publications/{slug}', [PublicationController::class, 'download'])->name('publications.download');
Route::get('/partners', [PageController::class, 'partners'])->name('partners');
Route::get('/contact-us', [PageController::class, 'contactUs'])->name('contact-us');
Route::get('/research-projects', [PageController::class, 'projects'])->name('projects');
Route::get('/research-projects/{slug}', [PageController::class, 'projectShow'])->name('projects.show');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/pages', [PageController::class, 'index'])->name('pages.index');
    Route::get('/pages/{id}', [PageController::class, 'show'])->name('pages.show');
    Route::post('/pages/{id}', [PageController::class, 'update'])->name('pages.update');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::group(["prefix"=>"admin/research-projects"],function(){
        Route::get('/', [ProjectController::class, 'index'])->name('projects.index');
        Route::get('/new', [ProjectController::class, 'create'])->name('projects.create');
        Route::get('/edit/{id}', [ProjectController::class, 'edit'])->name('projects.edit');
        Route::post('/destroy/{id}', [ProjectController::class, 'destroy'])->name('projects.destroy');
    });

    Route::group(["prefix"=>"admin/publications"],function(){
        Route::get('/', [PublicationController::class, 'index'])->name('publications.index');
        Route::get('/new', [PublicationController::class, 'create'])->name('publications.create');
        Route::get('/edit/{slug}', [PublicationController::class, 'edit'])->name('publications.edit');
        Route::post('/destroy/{slug}', [PublicationController::class, 'destroy'])->name('publications.destroy');
    });

    Route::group(["prefix"=>"admin/experts"],function(){
        Route::get('/', [ExpertController::class, 'index'])->name('experts.index');
        Route::get('/new', [ExpertController::class, 'create'])->name('experts.create');
        Route::get('/edit/{slug}', [ExpertController::class, 'edit'])->name('experts.edit');
        Route::post('/destroy/{slug}', [ExpertController::class, 'destroy'])->name('experts.destroy');
    });

    Route::group(["prefix"=>"admin/users"],function(){
        Route::get('/', [UserController::class, 'index'])->name('users.index');
        Route::post('/destroy/{id}', [UserController::class, 'destroy'])->name('users.destroy');
    });
});

require __DIR__.'/auth.php';
