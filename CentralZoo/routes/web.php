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
    Route::post('/support', [PostsController::class, 'contact']);
    Route::get('/feedback', [PageController::class, 'feedback'])->name('feedback');
    Route::post('/feedback', [PostsController::class, 'feedback']);
    Route::get('/events', [PageController::class, 'events'])->name('events');
    Route::get('/animals', [PageController::class, 'animals'])->name('animals');
    Route::get('/tickets', [PageController::class, 'ticket'])->name('ticket');
    Route::post('/tickets', [PostsController::class, 'ticket']);
    Route::get('/visit', [PageController::class, 'visit'])->name('visit');
    Route::get('/order', [PageController::class, 'order'])->name('order');
    Route::post('/order', [PostsController::class, 'order']);
});

