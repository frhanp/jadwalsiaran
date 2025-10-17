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
use App\Http\Controllers\Admin\JadwalPetugasController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\StudioController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\Penyiar\PendengarController;
use App\Http\Controllers\Penyiar\TugasController;







Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    }
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::post('/notifications/mark-as-read', [NotificationController::class, 'markAsRead'])->name('notifications.markAsRead');

    Route::middleware(['role:admin'])->name('admin.')->prefix('admin')->group(function () {
        Route::resource('users', UserController::class); 
        Route::resource('programs', ProgramController::class);
        Route::resource('programs.sequences', SequenceController::class)->except(['show'])->shallow();
        Route::resource('sequences.items', SequenceItemController::class)->except(['show'])->shallow();
        Route::get('items/{item}/materi-details', [MateriDetailController::class, 'edit'])->name('items.materi-details.manage');
        Route::put('items/{item}/materi-details', [MateriDetailController::class, 'update'])->name('items.materi-details.update-all');
        Route::get('items/{item}/item-details', [ItemDetailController::class, 'edit'])->name('items.item-details.manage');
        Route::put('items/{item}/item-details', [ItemDetailController::class, 'update'])->name('items.item-details.update-all');
        Route::resource('programs.petugas', JadwalPetugasController::class)->parameters(['petugas' => 'jadwalPetugas']);
       
        });

        Route::middleware(['role:katim'])->name('admin.')->prefix('admin')->group(function () {
            Route::resource('studios', StudioController::class); // PINDAHKAN KE SINI
        });

    // Grup untuk Penyiar
    Route::middleware(['role:penyiar'])->name('penyiar.')->prefix('penyiar')->group(function () {
        Route::get('jadwal', [JadwalController::class, 'index'])->name('jadwal.index');
        Route::resource('sequences.items', SequenceItemController::class)->except(['show'])->shallow();
        Route::get('items/{item}/materi-details', [MateriDetailController::class, 'edit'])->name('items.materi-details.manage');
        Route::put('items/{item}/materi-details', [MateriDetailController::class, 'update'])->name('items.materi-details.update-all');
        Route::get('items/{item}/item-details', [ItemDetailController::class, 'edit'])->name('items.item-details.manage');
        Route::put('items/{item}/item-details', [ItemDetailController::class, 'update'])->name('items.item-details.update-all');
        Route::post('jadwal-petugas/{jadwalPetugas}/pendengars', [PendengarController::class, 'store'])->name('pendengars.store');
        Route::delete('pendengars/{pendengar}', [PendengarController::class, 'destroy'])->name('pendengars.destroy');
        Route::post('tugas/{jadwalPetugas}/terima', [TugasController::class, 'terima'])->name('tugas.terima');
        Route::post('tugas/{jadwalPetugas}/tolak', [TugasController::class, 'tolak'])->name('tugas.tolak');

    });

    // Grup untuk Kepsta dan Katim (hanya laporan)
    Route::middleware(['role:kepsta,katim'])->name('laporan.')->prefix('laporan')->group(function () {
        Route::get('jadwal-harian', [LaporanController::class, 'index'])->name('jadwal.harian');
        Route::get('jadwal-harian/cetak', [LaporanController::class, 'cetak'])->name('jadwal.cetak');
    });
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['role:admin,kepsta,katim'])->name('laporan.')->prefix('laporan')->group(function () {
    Route::get('jadwal-harian', [LaporanController::class, 'index'])->name('jadwal.harian');
    Route::get('jadwal-harian/cetak', [LaporanController::class, 'cetak'])->name('jadwal.cetak');
});




require __DIR__ . '/auth.php';
