<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SearchController;

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

// 注文するページ
Route::resource('order', OrderController::class);
Route::get('order/search/input', [SearchController::class, 'create'])->name('search.input');
Route::get('order/search/result', [SearchController::class, 'index'])->name('search.result');
Route::post('order/confirm', [OrderController::class,'confirm'])->name('order.confirm');
Route::get('order/accept', [OrderController::class,'accept'])->name('order.accept');

// トップページの表示
Route::get('/', function () {
    return view('dashbo');
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
