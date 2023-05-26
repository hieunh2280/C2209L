<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\OrderController;

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

Route::prefix("")->group(function(){
    Route::get('/', [PageController::class, 'home'])->name('home');
    Route::get('/support', [PageController::class, 'support'])->name('support');
    Route::get('/feedback', [PageController::class, 'feedback'])->name('feedback');
    Route::get('/events', [PageController::class, 'events'])->name('events');
    Route::get('/animals', [PageController::class, 'animals'])->name('animals');
    Route::get('/tickets', [PageController::class, 'ticket'])->name('ticket');
    Route::get('/visit', [PageController::class, 'visit'])->name('visit');
    Route::post('/tickets', [PostController::class, 'ticket']);
    Route::get('/order', [PageController::class, 'order'])->name('order');
    Route::post('/order', [PostsController::class, 'order']);
    Route::get('/test',[PostsController::class, 'index']);
});
// Ticket page routes
Route::get('/ticket', function () {
    return view('quan.ticket');
});
Route::get('/ticket/order', [OrderController::class, 'create']);
Route::post('/ticket/order', [OrderController::class, 'store']);

