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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', [ShopController::class,`index`]);
Route::get('/detail/{shop_id}', [ShopController::class,`detail`]);
Route::post('/find', [ShopController::class,`find`]);
Route::post('/reserve', [ReservationController::class,`create`]);
// controllerでは予約完了画面げredirect
Route::post('/reserve/delete', [ReservationController::class,`delete`]);
Route::post('/favorite', [FavoriteController::class,`create`]);
Route::post('/favorite/delete', [FavoriteController::class,`delete`]);
