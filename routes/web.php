<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\LoanScheduleController;
use App\Http\Controllers\GenerateReportController;

Route::get('/', function () {
    return view('landing_page.home');
})->name('home');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/gedung', [BuildingController::class, 'index'])->name('buildings.index');
Route::get('/gedung/{id}', [BuildingController::class, 'show'])->name('buildings.show');
Route::get('/ruangan/{id}', [BuildingController::class, 'roomDetail'])->name('rooms.show');

Route::post('/pinjam', [LoanScheduleController::class, 'store'])->name('loan.store');
Route::resource('peminjaman', LoanScheduleController::class);

Route::get('/get-prodi', [BuildingController::class, 'getProdi']);
Route::get('/get-ruangan', [BuildingController::class, 'getRuangan']);

Route::get('/get-prodi', [LoanScheduleController::class, 'getProdi'])->name('getProdi');
Route::get('/get-ruangan', [LoanScheduleController::class, 'getRuangan'])->name('getRuangan');

Route::get('/urb', function () {
    return view('pages.index');
})->name('urb');

Route::get('/peminjaman', function () {
    return view('pages.pinjam');
})->name('peminjaman');

Route::get('/riwayat', function () {
    return view('pages.riwayat');
})->name('riwayat');

Route::get('/riwayat/generate-history-report', [GenerateReportController::class, 'generateHistoryReport'])->name('generateHistoryReport');

Route::get('/admin', function () {
    return view('admin.admin');
})->name('admin');
