<?php

use App\Http\Controllers\DashboardController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboaardController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\UserController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    // Frontend Routes

    Route::get( '/', [HomeController::class, 'home'])->name('home');
    Route::get( '/property/{id}', [HomeController::class, 'singleProperty'])->name('single-property');
    Route::get( '/locations/{id}', [HomeController::class, 'singleLocation'])->name('single-location');
    Route::get( '/properties/', [HomeController::class, 'propertyIndex'])->name('properties');
    Route::get( '/page/{slug}', [HomeController::class, 'singlePage'])->name('page');
    Route::post( '/property-inquiry/{id}', [ContactController::class, 'propertyInquiry'])->name('property-inquiry');

    Route::get( '/currency/{code}', [HomeController::class, 'currencyChange'])->name('currency-change');


    // Admin Routes

    Route::get('/dashboard', [DashboaardController::class, 'index'])->middleware(['auth'])->name('dashboard-index');

    Route::post('/dashboard/delete-media/{media_id}', [DashboaardController::class, 'deleteMedia'])->middleware(['auth'])->name('delete-media');

    Route::resource('dashboard-property', PropertyController::class);

    Route::resource('dashboard-location', LocationController::class);

    Route::resource('dashboard-page', PageController::class);

    Route::resource('dashboard-user', UserController::class);

    Route::get('/dashboard/messages', [DashboaardController::class, 'messages'])->middleware(['auth'])->name('dashboard-messages');
    Route::post('/dashboard/message/{id}', [DashboaardController::class, 'singleMessage'])->middleware(['auth'])->name('message');
    Route::post('/dashboard/delete-message/{id}', [DashboaardController::class, 'deleteMessage'])->middleware(['auth'])->name('delete-message');


    require __DIR__.'/auth.php';

});

// Route::middleware(['auth'])->group(function() {
//     Route::get('/dashboard', [DashboaardController::class, 'index'])->name('dashboard-index');
// });

