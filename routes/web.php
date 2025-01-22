<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/recruitment', function () {  
    return view('pages/recruitment/laman_rekrutment');  
})->name('recruitment');

Route::get('/recruitment/check', function () {  
    return view('pages/recruitment/check_recruitment');  
})->name('check_recruitment');

Route::get('/recruitment/detail', function () {  
    return view('pages/recruitment/detail_loker');  
})->name('detail_recruitment');

Route::get('/payslip', function () {  
    return view('pages/payslip/payslip');  
})->name('e_payslip');
