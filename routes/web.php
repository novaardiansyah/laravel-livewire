<?php

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

Route::group([
  'prefix' => 'artisan',
  'as' => 'artisan.'
], function () {
  // Route::get('symlink', function () {
  //   Artisan::call('storage:link');
  //   echo 'Symlink created successfully.';
  // })->name('symlink');

  // Route::get('migrate', function () {
  //   Artisan::call('migrate');
  //   echo 'Migrate created successfully' ;
  // })->name('migrate');
});
