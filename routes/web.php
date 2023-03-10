<!-- <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\TanggapanController;

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

Route::resource('login', LoginController::class);

Route::get('/logout',[LoginController::class, 'logout']);

Route::get('register',[AkunController::class, 'register'])->name('register.user');

Route::middleware('login')->group(function() {
    Route::get('/admin', function () {
        return view('admin.index');
    })->name('admin.index')->middleware('admin');

    Route::resource('akun', AkunController::class)->middleware('admin');

    Route::resource('admintanggapan', TanggapanController::class)->middleware('admin');

    Route::get('adminupdate/{id}', [TanggapanController::class, 'admintanggapan'])->name('adminupdate')->middleware('admin');

    Route::put('/adminupdatetanggapan/{id}', [TanggapanController::class, 'adminupdatetanggapan'])->name('adminupdatetanggapan')->middleware('admin');

    Route::get('user', [AkunController::class,'user'])->name('akun.history')->middleware('admin');

    Route::get('history', [PengaduanController::class,'adminhistory'])->name('adminhistory')->middleware('admin');

    Route::get('/petugas', function () {
        return view('petugas.index');
    })->name('petugas.index')->middleware('petugas');

    Route::get('beritanggapan', [TanggapanController::class, 'petugas'])->name('tanggapan.index')->middleware('petugas');

    Route::get('beritanggapan/{id}', [TanggapanController::class, 'petugasedit'])->name('tanggapan.edit')->middleware('petugas');

    Route::put('/approvetanggapan/{id}', [TanggapanController::class, 'petugasupdate'])->name('approvetanggapan')->middleware('petugas');

    Route::get('updatetanggapan/{id}', [TanggapanController::class, 'updatetanggapan'])->name('tanggapan.update')->middleware('petugas');

    Route::put('/petugasupdatetanggapan/{id}', [TanggapanController::class, 'petugasupdatetanggapan'])->name('petugasupdatetanggapan')->middleware('petugas');

    Route::get('/user', function () {
        return view('user.index');
    })->name('user.index')->middleware('user');

    Route::resource('pengaduan', PengaduanController::class)->middleware('user');

    Route::get('historyanda', [PengaduanController::class, 'history'])->name('history.user')->middleware('user');

    
});