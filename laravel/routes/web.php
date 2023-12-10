<?php

use App\Livewire\ContactUs;
use App\Livewire\HomePage;
use App\Livewire\UserList;
use App\Livewire\UserPage;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

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
Route::get('users-list', UserList::class)->name('users-list');

Livewire::setScriptRoute(function ($handle) {
  return Route::get(env('LIVEWIRE_APP_PATH') . '/livewire.js', $handle);
});

Livewire::setUpdateRoute(function ($handle) {
  return Route::post(env('LIVEWIRE_APP_PATH') . '/update', $handle);
});