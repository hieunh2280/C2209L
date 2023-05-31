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
    Route::post('/feedback', [PostsController::class, 'feedback']);
    Route::get('/events', [PageController::class, 'events'])->name('events');
    Route::get('/animals', [PageController::class, 'animals'])->name('animals');
    Route::get('/tickets', [PageController::class, 'ticket'])->name('ticket');
    Route::post('/tickets', [PostsController::class, 'ticket']);
    Route::get('/visit', [PageController::class, 'visit'])->name('visit');
    Route::get('/order', [PageController::class, 'order'])->name('order');
    Route::post('/order', [PostsController::class, 'order']);
    Route::get('/test',[PostsController::class, 'index']);
});

Route::prefix("admin")->group(function(){
    Route::get("/", [AdminController::class, 'home'])->name('manager');
    Route::get("/animals", [AdminController::class, 'animals'])->name('animals_manage');
    Route::get("/events", [AdminController::class, 'events'])->name('events_manage');
});
// Ticket page routes
Route::get('/ticket', function () {
    return view('quan.order');
});


