<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProgramController;
use App\Http\Controllers\Admin\SequenceController;
use App\Http\Controllers\Admin\SequenceItemController;
use App\Http\Controllers\Admin\MateriDetailController;
use App\Http\Controllers\Admin\ItemDetailController;
use App\Http\Controllers\Penyiar\JadwalController;
use App\Http\Controllers\LaporanController;







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
        Route::resource('programs.sequences', SequenceController::class)->except(['show'])->shallow();
        Route::resource('sequences.items', SequenceItemController::class)->except(['show'])->shallow();
        Route::get('items/{item}/materi-details', [MateriDetailController::class, 'edit'])->name('items.materi-details.manage');
        Route::put('items/{item}/materi-details', [MateriDetailController::class, 'update'])->name('items.materi-details.update-all');
        Route::get('items/{item}/item-details', [ItemDetailController::class, 'edit'])->name('items.item-details.manage');
        Route::put('items/{item}/item-details', [ItemDetailController::class, 'update'])->name('items.item-details.update-all');
    });

    // Grup untuk Penyiar
    Route::middleware(['role:penyiar'])->name('penyiar.')->prefix('penyiar')->group(function () {
        Route::get('jadwal', [JadwalController::class, 'index'])->name('jadwal.index');
        Route::resource('sequences.items', SequenceItemController::class)->except(['show'])->shallow();
        Route::get('items/{item}/materi-details', [MateriDetailController::class, 'edit'])->name('items.materi-details.manage');
        Route::put('items/{item}/materi-details', [MateriDetailController::class, 'update'])->name('items.materi-details.update-all');
        Route::get('items/{item}/item-details', [ItemDetailController::class, 'edit'])->name('items.item-details.manage');
        Route::put('items/{item}/item-details', [ItemDetailController::class, 'update'])->name('items.item-details.update-all');
    });

    // Grup untuk Kepsta dan Katim (hanya laporan)
    Route::middleware(['role:kepsta,katim'])->name('laporan.')->prefix('laporan')->group(function () {
        Route::get('jadwal-harian', [LaporanController::class, 'index'])->name('jadwal.harian');
    });
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




require __DIR__ . '/auth.php';
