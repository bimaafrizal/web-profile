<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [IndexController::class, 'index']);
Route::post('send-email', [IndexController::class, 'contactEmail'])->name('send-email');

Route::controller(AuthController::class)->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('login', 'index');
        Route::post('login', 'login')->name('login');
    });
    Route::post('logout', 'logout');
});

Route::controller(LandingPageController::class)->middleware('auth')->group(function () {
    Route::get('/dashboard', 'index')->name('dashboard.index');
    Route::get('/landing-page', 'landingPage')->name('landing-page.index');
    Route::post('/home', 'home')->name('landing-page.home');
    Route::post('/about', 'about')->name('landing-page.about');
    Route::post('/contact', 'contact')->name('landing-page.contact');

    Route::post('/detail-about-create', 'detailCreate')->name('detail-about.create');
    Route::post('/detail-about-edit/{id}', 'detailEdit')->name('detail-about.edit');
    Route::post('/detail-about-delete/{id}', 'detailDelete')->name('detail-about.delete');

    Route::post('/service-create', 'serviceCreate')->name('service.create');
    Route::post('/service-edit/{id}', 'serviceEdit')->name('service.edit');
    Route::post('/service-delete/{id}', 'serviceDelete')->name('service.delete');

    Route::post('/clients-create', 'clientCreate')->name('clients.create');
    Route::post('/clients-edit/{id}', 'clientEdit')->name('clients.edit');
    Route::post('/clients-delete/{id}', 'clientDelete')->name('clients.delete');
});
