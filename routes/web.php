<?php

use App\Http\Controllers\ProfileController;
use App\Http\Livewire\Auth\Category\CategoryCreate;
use App\Http\Livewire\Auth\Category\CategoryEdit;
use App\Http\Livewire\Auth\Category\CategoryList;
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

Route::view('/', 'home')->name('home');

Route::prefix('auth')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::name('auth.')->group(function () {
            Route::view('/', 'auth.dashboard')->name('dashboard');
            Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

            Route::get('categories', CategoryList::class)->name('categories.index');
            Route::get('categories/create', CategoryCreate::class)->name('categories.create');
            Route::get('categories/{category}/edit', CategoryEdit::class)->name('categories.edit');
        });
    });

    require __DIR__ . '/web/auth.php';
});
