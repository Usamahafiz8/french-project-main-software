<?php

use Illuminate\Support\Facades\Route;
use APP\Http\Controllers\HomeController;
use App\Http\Controllers\AuditorController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\generatePDFController;
Route::get('/', function () {
    // return view('formPDF');
    return view('welcome');
});

Auth::routes();

Route::get('/form', [App\Http\Controllers\HomeController::class, 'form']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('is_auditor');
Route::get('/customerdetails/{id}', [App\Http\Controllers\CustomerController::class, 'customerdetails'])->name('customers');
Route::get('/deletecustomer/{id}', [App\Http\Controllers\CustomerController::class, 'deletecustomer']);
Route::post('/addCustomer', [App\Http\Controllers\CustomerController::class, 'add_customer'])->name('addCustomer')->middleware('is_auditor');

Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('admin/manageAuditor', [App\Http\Controllers\HomeController::class, 'manageAuditorsByAdmin'])->name('admin.manageAuditor')->middleware('is_admin');
Route::get('admin/manageCustomer', [App\Http\Controllers\HomeController::class, 'manageCustomersByAdmin'])->name('admin.manageCustomer')->middleware('is_admin');
Route::post('admin/addauditor', [App\Http\Controllers\AuditorController::class, 'add_auditor'])->middleware('is_admin');
Auth::routes();

Route::post('/save_step1', [App\Http\Controllers\CustomerController::class, 'step1Store']);
Route::post('/save_step2', [App\Http\Controllers\CustomerController::class, 'step2Store']);
Route::post('/save_step3', [App\Http\Controllers\CustomerController::class, 'step3Store']);
Route::post('/save_step4', [App\Http\Controllers\CustomerController::class, 'step4Store']);
Route::post('/details_step4', [App\Http\Controllers\CustomerController::class, 'step4Details']);
Route::post('/save_step5', [App\Http\Controllers\CustomerController::class, 'step5Store']);
Route::post('/save_step6', [App\Http\Controllers\CustomerController::class, 'step6Store']);
Route::post('/details_step6', [App\Http\Controllers\CustomerController::class, 'step6Details']);
Route::post('/save_step7', [App\Http\Controllers\CustomerController::class, 'step7Store']);
Route::post('/save_step8', [App\Http\Controllers\CustomerController::class, 'step8Store']);
Route::post('/details_step8', [App\Http\Controllers\CustomerController::class, 'step8Details']);
Route::post('/save_step9', [App\Http\Controllers\CustomerController::class, 'step9Store']);
Route::post('/save_step10', [App\Http\Controllers\CustomerController::class, 'step10Store']);
Route::post('/details_step10', [App\Http\Controllers\CustomerController::class, 'step10Details']);
Route::post('/save_step11', [App\Http\Controllers\CustomerController::class, 'step11Store']);
Route::post('/details_step11', [App\Http\Controllers\CustomerController::class, 'step11Details']);
Route::post('/save_step12', [App\Http\Controllers\CustomerController::class, 'step12Store']);
Route::post('/save_step13', [App\Http\Controllers\CustomerController::class, 'step13Store']);
Route::post('/details_step13', [App\Http\Controllers\CustomerController::class, 'step13Details']);
Route::post('/save_step14', [App\Http\Controllers\CustomerController::class, 'step14Store']);
Route::post('/save_step15', [App\Http\Controllers\CustomerController::class, 'step15Store']);

Route::get('generate-pdf', [generatePDFController::class, 'generatePDF']);
Route::get('/getPDFdata/{id}', [generatePDFController::class, 'getPDFdata'])->name('getPDFdata');