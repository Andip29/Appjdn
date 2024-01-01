<?php

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
Route::get("/localization/{language}", [\App\Http\Controllers\LocalizationController::class,"switch"])
        ->name("localization.switch");


Route::get('/', function () {
    return view('auth.login');
});
    
Auth::routes([
    'register' => false
]);

Route::group(['prefix'=> 'dashboard','middleware' => ['web','auth']], function () {
    Route::get('/', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');

    //roles
    Route::get('/roles/select', [\App\Http\Controllers\RoleController::class,'select'])->name('roles.select');
    Route::resource('/roles', \App\Http\Controllers\RoleController::class);
    
    Route::resource('/users', \App\Http\Controllers\UserController::class)->except(['show']);

    Route::get('/reminder-form', [\App\Http\Controllers\ReminderController::class, 'showForm'])->name('reminder.form');
    Route::post('/send-message', [\App\Http\Controllers\ReminderController::class, 'sendMessage'])->name('send-message');
    
    Route::resource('/inventories', \App\Http\Controllers\InventoryController::class);
});