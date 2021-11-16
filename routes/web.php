<?php

use App\Models\Cuti;
use App\Models\Karyawan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CutiController;
use App\Http\Controllers\KaryawanController;

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
    $krw = Karyawan::count();
    $cuti = Cuti::count();
    return view('index',[
        'krw'=> $krw,
        'cuti'=> $cuti,
    ]);
});

Route::resource('karyawan', KaryawanController::class);
Route::resource('cuti', CutiController::class);

Route::get('karyawan-lama', function () {
    $krw = Karyawan::orderBy('tgl_gabung', 'ASC')->paginate(3);
    // dd($krw);
    return view('karyawan-lama',compact('krw'));
});

Route::get('daftar-karyawan-cuti', function () {
    $dkc = Cuti::with('karyawan')->get();
    return view('daftar-karyawan-cuti',[
        'dkc' => $dkc
    ]);
});

Route::get('karyawan-cuti-lebih-dari-satu', function () {
    $ct = Cuti::whereIn('no_induk', function ( $query ) {
        $query->select('no_induk')->from('cutis')->groupBy('no_induk')->havingRaw('count(*) > 1');
    })->with('karyawan')->get();
    // dd($ct);
    return view('karyawan-cuti-lebih-dari-satu',[
        'ct' => $ct
    ]);
});

Route::get('sisa-cuti', function () {
    $sc = Cuti::join('karyawans', 'cutis.no_induk', '=', 'karyawans.no_induk')->get();

    // dd($sc);

    return view('sisa-cuti',[
        'sc' => $sc
    ]);
});
