<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Livewire\Beranda;
use App\Livewire\LoginUser;
use App\Livewire\RegisterUser;
use App\Livewire\Pic\Pic;
use App\Livewire\Profile\UserProfile;

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

Route::get('/', [Beranda::class,'render'])->name('beranda-tamu');
Route::get('/beranda', [Beranda::class,'render'])->name('beranda');

// User Login
Route::get('/login', LoginUser::class)->name('login');
Route::get('/logout', [LoginUser::class,'logout'])->name('logout');

// Register User
Route::get('/register', RegisterUser::class)->name('register');

// PIC 
Route::get('/pic', Pic::class);

// User Profile
Route::get('/profile', UserProfile::class);