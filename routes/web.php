<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\{
    MahasiswaController,
};

Route::get('/', function () {
    return view('pages.admin.dashboard.index');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');