<?php

use App\Http\Controllers\CounselingController;
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

Route::get('/counseling', [CounselingController::class, 'index'])->name('counseling');
Route::post('/konseling', [CounselingController::class, 'store']);
