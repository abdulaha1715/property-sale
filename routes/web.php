<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\DashboardController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboaardController;
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
    Route::get( '/property/{id}', [PropertyController::class, 'single'])->name('single-property');
    Route::get( '/properties/', [PropertyController::class, 'index'])->name('properties');
    Route::get( '/page/{slug}', [PageController::class, 'single'])->name('page');
    Route::post( '/property-inquiry/{id}', [ContactController::class, 'propertyInquiry'])->name('property-inquiry');


    // Admin Routes

    Route::get('/dashboard', [DashboaardController::class, 'index'])->middleware(['auth'])->name('dashboard-index');

    Route::get('/dashboard/properties', [DashboaardController::class, 'properties'])->middleware(['auth'])->name('dashboard-properties');

    Route::get('/dashboard/add-property', [DashboaardController::class, 'addProperty'])->middleware(['auth'])->name('add-property');

    Route::post('/dashboard/create-property', [DashboaardController::class, 'createProperty'])->middleware(['auth'])->name('create-property');

    Route::get('/dashboard/edit-property/{id}', [DashboaardController::class, 'editProperty'])->middleware(['auth'])->name('edit-property');

    Route::post('/dashboard/delete-media/{media_id}', [DashboaardController::class, 'deleteMedia'])->middleware(['auth'])->name('delete-media');

    require __DIR__.'/auth.php';

});

// Route::middleware(['auth'])->group(function() {
//     Route::get('/dashboard', [DashboaardController::class, 'index'])->name('dashboard-index');
// });

