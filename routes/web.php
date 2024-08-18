<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');

Route::get('/contacts/orderByName', [ContactController::class, 'orderByName'])->name('contacts.orderByName');
Route::get('/contacts/orderByDate', [ContactController::class, 'orderByDate'])->name('contacts.orderByDate');
Route::get('/contacts/search', [ContactController::class, 'search'])->name('contacts.search');
Route::get('/contacts/{id}', [ContactController::class, 'viewSingleContact'])->name('contacts.viewSingleContact');

Route::get('/contacts/create', function () {
    return view('create');
});

Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');
Route::post('/contacts/{cts}', [ContactController::class, 'update'])->name('contacts.update');
Route::delete('/contacts/{cts}',[ContactController::class, 'destroy'])->name('contacts.destroy');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');