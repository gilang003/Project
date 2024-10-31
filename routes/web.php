<?php



use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('Admin.Dashboard');
});

Route::get('/tambah', function () {
    return view('mahasiswa.tambah');
});

// Route ke halaman index yang memanggil controller untuk mendapatkan data
Route::get('/index', [PegawaiController::class, 'index'])->name('getalldataPegawai');

// Routes untuk pengelolaan data mahasiswa
Route::post('/Mahasiswa/create', [PegawaiController::class, 'createData'])->name('createDataPegawai');
Route::get('/Mahasiswa/get/{id}', [PegawaiController::class, 'getDataById'])->name('getDataByIdPegawai');
Route::post('/Mahasiswa/update/{id}', [PegawaiController::class, 'updateData'])->name('updateDataPegawai');
Route::delete('/Mahasiswa/delete/{id}', [PegawaiController::class, 'deleteData'])->name('deleteDataPegawai');
