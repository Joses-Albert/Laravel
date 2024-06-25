<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TemanController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\PsikotesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\PertanyaanController;




Route::get('psikotes',[App\Http\Controllers\PsikotesController::class, 'psikotespage'])->name('psikotes');
Route::get('artikel',[App\Http\Controllers\ArtikelController::class, 'artikelpage'])->name('artikel');
Route::get('konsultasi',[App\Http\Controllers\KonsultasiController::class, 'konsultasipage'])->name('konsultasi');
Route::get('pertanyaan', [App\Http\Controllers\PertanyaanController::class, 'pertanyaanpage'])->name('pertanyaan');
// Route::get('teman', [App\Http\Controllers\TemanController::class, 'temanpage'])->name('teman');
Route::get('beranda',[App\Http\Controllers\BerandaController::class, 'berandapage'])->name('beranda');
Route::get('dashboard',[App\Http\Controllers\DashboardController::class, 'dashboardpage'])->name('dashboard');


// Artikel Routes
// Route::resource('artikel', ArtikelController::class)->name('artikelpage');

// Add a route that can load an image from storage based on a parameter
Route::get('/images/{imageName}', [ImageController::class, 'show'])->name('image.show');


Route::get('/', function () {
    return view('dashboard');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

// Register Routes
Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// Login Routes
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');

// Authenticated Routes
Route::group(['middleware' => ['auth']], function () {
    // Logout Route
    Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');

    // Dashboard Route
    Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda.index');

    // Data Pengguna Route
    // Route::get('/data-pengguna', [DashboardController::class, 'showDataPengguna'])->name('dashboard.showDataPengguna');
});


?>

