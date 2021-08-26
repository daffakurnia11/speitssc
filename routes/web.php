<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\MemberController;
use App\Http\Controllers\Auth\RenewalController;

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

// PagesController
Route::get('/', function () {
  return view('errors.maintenance');
});

Route::get('/home', [PagesController::class, 'landing']);
Route::get('/member', [PagesController::class, 'member']);

// MemberController
Route::get('/member/new', [MemberController::class, 'new_member'])->middleware('guest');
Route::get('/register', [MemberController::class, 'register'])->middleware('guest');
Route::post('/register', [MemberController::class, 'store']);

// RenewalController
Route::get('/member/renewal', [RenewalController::class, 'renewal_member'])->middleware('guest');
Route::get('/renewal', [RenewalController::class, 'renewal'])->middleware('guest');
Route::post('renewal', [RenewalController::class, 'store']);

// AuthController
Route::get('/login', [AuthController::class, 'login'])->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);
