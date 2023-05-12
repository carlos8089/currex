<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
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
//Guest routes
Route::get('/', function () {
    return view('welcome');
});

//App routes
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/app/offers', function () {
    return view('offers.offers-index');
})->middleware(['auth', 'verified'])->name('offers');
Route::get('/app/messages', function () {
    return view('message/messages');
})->middleware(['auth', 'verified'])->name('messages');
Route::get('/changers/jane-doe', function () {
    return view('changer');
})->middleware(['auth', 'verified']);
Route::get('/messages/message', function () {
    return view('message.message');
})->middleware(['auth', 'verified'])->name('message');
Route::get('/offers/create', function (){
    return view('offers.add-form');
})->middleware(['auth', 'verified'])->name('offers.create');

//Profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
