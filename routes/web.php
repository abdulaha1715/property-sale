<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\DashboardController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboaardController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\Admin\PageController;
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
    Route::get( '/locations/{id}', [PropertyController::class, 'single'])->name('single-location');
    Route::get( '/properties/', [PropertyController::class, 'index'])->name('properties');
    Route::get( '/page/{slug}', [HomeController::class, 'singlepage'])->name('page');
    Route::post( '/property-inquiry/{id}', [ContactController::class, 'propertyInquiry'])->name('property-inquiry');


    // Admin Routes

    Route::get('/dashboard', [DashboaardController::class, 'index'])->middleware(['auth'])->name('dashboard-index');

    Route::get('/dashboard/properties', [DashboaardController::class, 'properties'])->middleware(['auth'])->name('dashboard-properties');
    Route::get('/dashboard/add-property', [DashboaardController::class, 'addProperty'])->middleware(['auth'])->name('add-property');
    Route::post('/dashboard/create-property', [DashboaardController::class, 'createProperty'])->middleware(['auth'])->name('create-property');
    Route::post('/dashboard/update-property/{id}', [DashboaardController::class, 'updateProperty'])->middleware(['auth'])->name('update-property');
    Route::post('/dashboard/delete-property/{id}', [DashboaardController::class, 'deleteProperty'])->middleware(['auth'])->name('delete-property');
    Route::get('/dashboard/edit-property/{id}', [DashboaardController::class, 'editProperty'])->middleware(['auth'])->name('edit-property');

    Route::post('/dashboard/delete-media/{media_id}', [DashboaardController::class, 'deleteMedia'])->middleware(['auth'])->name('delete-media');


    Route::get('/dashboard/locations', [DashboaardController::class, 'locations'])->middleware(['auth'])->name('dashboard-locations');
    Route::get('/dashboard/add-location', [DashboaardController::class, 'addLocation'])->middleware(['auth'])->name('add-location');
    Route::post('/dashboard/create-location', [DashboaardController::class, 'createLocation'])->middleware(['auth'])->name('create-location');
    Route::post('/dashboard/update-location/{id}', [DashboaardController::class, 'updateLocation'])->middleware(['auth'])->name('update-location');
    Route::post('/dashboard/delete-location/{id}', [DashboaardController::class, 'deleteLocation'])->middleware(['auth'])->name('delete-location');
    Route::get('/dashboard/edit-location/{id}', [DashboaardController::class, 'editLocation'])->middleware(['auth'])->name('edit-location');

    Route::resource('dashboard-page', PageController::class);

    // Route::get('/dashboard/page', [DashboaardController::class, 'pages'])->middleware(['auth'])->name('dashboard-pages');
    // Route::get('/dashboard/add-page', [DashboaardController::class, 'addPage'])->middleware(['auth'])->name('add-page');
    // Route::post('/dashboard/create-page', [DashboaardController::class, 'createPage'])->middleware(['auth'])->name('create-page');
    // Route::post('/dashboard/update-page/{id}', [DashboaardController::class, 'updatePage'])->middleware(['auth'])->name('update-page');
    // Route::post('/dashboard/delete-page/{id}', [DashboaardController::class, 'deletePage'])->middleware(['auth'])->name('delete-page');
    // Route::get('/dashboard/edit-page/{id}', [DashboaardController::class, 'editPage'])->middleware(['auth'])->name('edit-page');


    Route::get('/dashboard/users', [DashboaardController::class, 'users'])->middleware(['auth'])->name('dashboard-users');
    Route::get('/dashboard/add-user', [DashboaardController::class, 'addUser'])->middleware(['auth'])->name('add-user');
    Route::post('/dashboard/create-user', [DashboaardController::class, 'createUser'])->middleware(['auth'])->name('create-user');
    Route::post('/dashboard/update-user/{id}', [DashboaardController::class, 'updateUser'])->middleware(['auth'])->name('update-user');
    Route::post('/dashboard/delete-user/{id}', [DashboaardController::class, 'deleteUser'])->middleware(['auth'])->name('delete-user');
    Route::get('/dashboard/edit-user/{id}', [DashboaardController::class, 'editUser'])->middleware(['auth'])->name('edit-user');


    Route::get('/dashboard/messages', [DashboaardController::class, 'messages'])->middleware(['auth'])->name('dashboard-messages');
    Route::post('/dashboard/message/{id}', [DashboaardController::class, 'singleMessage'])->middleware(['auth'])->name('message');
    Route::post('/dashboard/delete-message/{id}', [DashboaardController::class, 'deleteMessage'])->middleware(['auth'])->name('delete-message');


    require __DIR__.'/auth.php';

});

// Route::middleware(['auth'])->group(function() {
//     Route::get('/dashboard', [DashboaardController::class, 'index'])->name('dashboard-index');
// });

