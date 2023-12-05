<?php

use App\Livewire\ContactUs;
use App\Livewire\HomePage;
use App\Livewire\UserPage;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

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

Route::get('/', HomePage::class)->name('home');
Route::get('/users/{user}', UserPage::class)->name('users');
Route::get('/contact-us', ContactUs::class)->name('contact-us');