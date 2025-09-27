<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProgramController;






Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware(['auth', 'verified'])->group(function () {

    Route::middleware(['role:admin'])->name('admin.')->prefix('admin')->group(function () {
        Route::resource('users', UserController::class); 
        Route::resource('programs', ProgramController::class);
        // Tambahkan route untuk sequence di sini jika diperlukan nanti
    });

    // Grup untuk Penyiar
    Route::middleware(['role:penyiar'])->name('penyiar.')->prefix('penyiar')->group(function () {
        // Route untuk penyiar mengisi jadwal, dll.
    });

    // Grup untuk Kepsta dan Katim (hanya laporan)
    Route::middleware(['role:kepsta,katim'])->group(function () {
        // Route untuk melihat laporan
    });
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




require __DIR__ . '/auth.php';
