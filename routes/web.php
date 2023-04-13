<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
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

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('Dashboard', route('dashboard'));
});

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Breadcrumbs::for('admin', function ($trail) {
    $trail->push('Admin', route('admin'));
});


Route::get('/projects', [App\Http\Controllers\ProjectsController::class, 'index'])->name('projects');
Breadcrumbs::for('projects', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Projects', route('projects'));
});

Route::get('/history', [App\Http\Controllers\HistoryController::class, 'index'])->name('history');
Breadcrumbs::for('history', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('History', route('history'));
});


Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Breadcrumbs::for('profile', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Profile', route('profile'));
});



Route::get('/addproject', [App\Http\Controllers\ProjectsController::class, 'index'])->name('addproject');
Breadcrumbs::for('addproject', function ($trail) {
    $trail->parent('projects');
    $trail->push('Add Project', route('addproject'));
});

Route::fallback(function () {
    abort(404);
});
