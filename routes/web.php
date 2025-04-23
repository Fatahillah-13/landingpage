<?php

use App\Http\Controllers\CounselingController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\ResignController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/recruitment', function () {
    return view('pages/recruitment/jobportal');
})->name('recruitment');

Route::get('/recruitment/check', function () {
    return view('pages/recruitment/check_recruitment');
})->name('check_recruitment');

Route::get('/recruitment/detail', function () {
    return view('pages/recruitment/detail_loker');
})->name('detail_recruitment');

Route::get('/recruitment/form', function () {
    return view('pages/recruitment/input_recruitment');
})->name('form_recruitment');

Route::get('/payslip', function () {
    return view('pages/payslip/payslip');
})->name('e_payslip');

Route::get('/resignForm', function () {
    return view('pages/resign/form');
})->name('resignform');

Route::get('/resignForm/download', function () {
    return view('pages/resign/downloadpage');
})->name('berkas.download');

Route::get('/counseling', [CounselingController::class, 'index'])->name('counseling');
Route::post('/counseling/store', [CounselingController::class, 'store'])->name('counseling.store');

// Route::get('/updateData', function () {
//     return view('pages/updateData/form');
// })->name('e_payslip');

Route::get('/form-karyawan', [EmployeeController::class, 'create']);
Route::post('/form-karyawan', [EmployeeController::class, 'store'])->name('form-karyawan.store');
Route::get('/get-wilayah', [EmployeeController::class, 'selectedWilayah']);
Route::get('/get-data-karyawan', [EmployeeController::class, 'index'])->name('karyawan.index');

Route::get('selectProv', [RegionController::class, 'provinsi'])->name('provinsi.index');
Route::get('selectRegenc/{id}', [RegionController::class, 'cities'])->name('cities.index');
Route::get('selectDistrict/{id}', [RegionController::class, 'district'])->name('district.index');
Route::get('selectVillage/{id}', [RegionController::class, 'village'])->name('village.index');

Route::post('/resignForm', [ResignController::class, 'store'])->name('resignform.store');
