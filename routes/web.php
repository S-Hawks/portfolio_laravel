<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MainPagesController;
use App\Http\Controllers\ServicePagesController;



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

// Route::get('/', function () {
//     return view('welcome');
// // });

Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/admin/dashboard', [PagesController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/main', [MainPagesController::class, 'index'])->name('admin.main');
Route::get('/admin/services', [PagesController::class, 'services'])->name('admin.services');
Route::get('/admin/portfolio', [PagesController::class, 'portfolio'])->name('admin.portfolio');
Route::get('/admin/about', [PagesController::class, 'about'])->name('admin.about');
Route::get('/admin/contact', [PagesController::class, 'contact'])->name('admin.contact');
Route::put('admin/main', [MainPagesController::class, 'update'])->name('admin.main.update');
//services
Route::get('/admin/services/create', [ServicePagesController::class, 'create'])->name('admin.services.create');
Route::post('/admin/services/create', [ServicePagesController::class, 'store'])->name('admin.services.store');
Route::get('/admin/services/list', [ServicePagesController::class,'listIndex'])->name('admin.services.list');
Route::get('/admin/services/edit/{id}', [ServicePagesController::class,'edit'])->name('admin.services.edit');
Route::post('/admin/services/update/{id}', [ServicePagesController::class,'update'])->name('admin.services.update');
Route::delete('/admin/services/destroy/{id}', [ServicePagesController::class,'destroy'])->name('admin.services.destroy');
//portfolios
//    Route::get('/portfolios/create', [PortfolioPagesController::class, 'create'])->name('admin.portfolios.create');
//    Route::post('/portfolios/create', [PortfolioPagesController::class, 'store'])->name('admin.portfolios.store');
//    Route::get('/portfolios/list', [PortfolioPagesControllerr::class,'listIndex'])->name('admin.portfolios.list');
//    Route::get('/portfolios/edit/{id}', [PortfolioPagesController::class,'edit'])->name('admin.portfolios.edit');
//    Route::post('/portfolios/update/{id}', [PortfolioPagesController::class,'update'])->name('admin.portfolios.update');
//    Route::delete('/portfolios/destroy/{id}', [PortfolioPagesController::class,'destroy'])->name('admin.portfolios.destroy');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
