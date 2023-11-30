<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\CheckOutController;

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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/login', [UserController::class, 'login'])->name('user.login');
Route::post('/store', [UserController::class, 'store'])->name('user.store');
Route::post('/verified', [UserController::class, 'verify'])->name('user.verify');
Route::post('/transactionsaved', [TransactionController::class, 'store'])->name('transact.store');

Route::get('/register', [TransactionController::class, 'registerTransact'])->name('transact.register');
Route::post('/registertransact', [TransactionController::class, 'register'])->name('transact.registerStore');

Route::get('loginUser', [CheckOutController::class, 'login'])->name('checkout.user');
Route::post('loginUserVerify', [CheckOutController::class, 'verifyUser', 'listTransaction'])->name('checkout.verify');
Route::post('checkout', [CheckOutController::class, 'checkoutitems'])->name('checkout');