<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Admin\ExpenseController;
use App\Http\Controllers\Admin\InventoryController;
use App\Http\Controllers\Admin\Crops\CropController;
use App\Http\Controllers\Admin\TaskController;


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin/dashboard', function () {
    return Inertia::render('Admin/Dashboard');
})->middleware(['auth', 'admin', 'verified'])->name('admin.dashboard.index');

Route::resource('/admin/expenses', ExpenseController::class)->middleware(['auth', 'admin', 'verified']);

Route::resource('/admin/inventory', InventoryController::class)->middleware(['auth', 'admin', 'verified']);

Route::resource('/admin/crops', CropController::class)->middleware(['auth', 'admin', 'verified']);

Route::resource('/admin/tasks', TaskController::class)->middleware(['auth', 'admin', 'verified']);