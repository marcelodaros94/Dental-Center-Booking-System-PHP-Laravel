<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingsController;

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

Route::get('reservas', [BookingsController::class, 'index'])
    ->name('bookings.index');
Route::get('reservas/crear', [BookingsController::class, 'create'])
    ->name('bookings.create');
Route::post('reservas', [BookingsController::class, 'store'])
        ->name('bookings.store');

Auth::routes();
