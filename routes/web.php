<?php
namespace App\Http\Controllers;
// use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

/*  ----------------- Admin rout----------------- */

Route::prefix('admin')->group(function () {
    Route::get('/login',[AdminController::class, 'index'])->name('login_form');
    Route::post('/login/owner',[AdminController::class, 'login'])->name('admin.login');
    
    Route::get('/register',[AdminController::class, 'register'])->name('admin.register');
Route::post('/registerprocess',[AdminController::class, 'registerprocess'])->name('admin.registerprocess');
    Route::get('/home', [AdminController::class, 'home'])->name('admin.home')->middleware('admin');
    
    Route::resource('product', ProductController::class);
});

// Route::group(['namespace' => 'Admin', 
//             'prefix' => 'admin',
//             'middleware' => 'Admin'], function() {
//                 Route::get('/login',[AdminController::class. 'index']);
//                 Route::get('/login/owner',[AdminController::class. 'login'])->name('admin.login');
//                 Route::get('/home',[AdminController::class. 'home'])->name('admin.home');
// });

/*  -----------------End Admin rout--------------- */

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [SalesController::class ,'index']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';