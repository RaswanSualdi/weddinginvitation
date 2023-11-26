<?php

use App\Http\Controllers\Admin\greenNaturalController;
use App\Http\Controllers\Admin\blueOceanController;
use App\Http\Controllers\greenNaturalController as ControllersGreenNaturalController;
use App\Http\Controllers\blueOceanController as ControllersBlueOceanController;
use App\Models\greenNatural;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\sendInviController;

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


Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');

Route::post('/', [AuthController::class, 'login'])->name('login_auth');


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/index', [greenNaturalController::class, 'index'])->name('admin.index');

    Route::get('/admin/add', [greenNaturalController::class, 'add'])->name('admin.add');

    Route::post('/admin/store', [greenNaturalController::class, 'store'])->name('admin.store');

    Route::get('/admin/blueocean/index', [blueOceanController::class, 'index'])->name('admin.blueocean.index');

    Route::get('/admin/blueocean/add', [blueOceanController::class, 'add'])->name('admin.blueocean.add');

    Route::post('/admin/blueocean/store', [blueOceanController::class, 'store'])->name('admin.blueocean.store');
  
});

Route::get('/greennatural/{slug}',[ControllersGreenNaturalController::class, 'show'])->name('show');
Route::post('/greennatural/{slug}/storechat',[ControllersGreenNaturalController::class, 'storeChat'])->name('storeChat');
Route::get('/greennatural/{slug}/kirim-undangan', [sendInviController::class, 'index'])->name('sendinvi');

Route::get('/blueocean/{slug}',[ControllersBlueOceanController::class, 'show'])->name('show.blueocean');
Route::post('/blueocean/{slug}/storechat',[ControllersBlueOceanController::class, 'storeChat'])->name('storeChat.blueocean');
Route::get('/blueocean/{slug}/kirim-undangan', [sendInviController::class, 'index'])->name('sendinvi.blueocean');

