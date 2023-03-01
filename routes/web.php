<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Breadcrumbs::for('admin', function ($trail) {
    $trail->push('Admin', route('admin'));
});


Route::get('/projects', [App\Http\Controllers\ProjectsController::class, 'index'])->name('projects');
Breadcrumbs::for('projects', function ($trail) {
    $trail->parent('home');
    $trail->push('Projects', route('projects'));
});

Route::get('/history', [App\Http\Controllers\HistoryController::class, 'index'])->name('history');
Breadcrumbs::for('history', function ($trail) {
    $trail->parent('home');
    $trail->push('History', route('history'));
});


Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Breadcrumbs::for('profile', function ($trail) {
    $trail->parent('home');
    $trail->push('Profile', route('profile'));
});
