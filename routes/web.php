<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\routing\HomeController;
use App\Http\Controllers\routing\PageController;

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

//Grouping with controller and namespace

Route::prefix('routing')->controller(HomeController::class)->group(function () {
    Route::get('/home', 'index');
    Route::get('/show/{id}', 'show');
    Route::get('/create', 'create')->name('home.create');
    Route::post('/store', 'store')->name('home.store');
    Route::resource('page', PageController::class)->only(['index', 'show']);
    Route::any('news', 'news');
});


// Route::get('/home', [HomeController::class, 'index']);

// //Route method get function show($id)
// Route::get('/show/{id}', [HomeController::class, 'show'])->name('home.show');

// //Route method get function create()
// Route::get('/create', [HomeController::class, 'create'])->name('home.create');

// //Route method post function store()
// Route::post('/store', [HomeController::class, 'store'])->name('home.store');

// //Route method resource function all CRUD
// Route::resource('page', PageController::class)->only(['index', 'show']);

// Route::any('news', [PageController::class, 'news'])->name('news');
