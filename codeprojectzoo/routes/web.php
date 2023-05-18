<?php

use Illuminate\Support\Facades\Route;
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
// Home page routes
Route::get('/', function () {
    return view('index');
});
// About Us page routes
Route::get('/about', function () {
    return view('about');
});
// Ticket page routes
Route::get('/ticket', function () {
    return view('ticket');
});
Route::get('/ticket/order', [OrderController::class, 'create']);
Route::post('/ticket/order', [OrderController::class, 'store']);
// Plan a Visit page routes
Route::get('/plan-a-visit', function () {
    return view('plan_a_visit');
});
// Animal page routes
Route::get('/animal', function () {
    return view('animal');
});
// Gallery page routes
Route::get('/gallery', function () {
    return view('gallery');
});
// Contact Us page routes
Route::get('/contact', function () {
    return view('contact');
});
