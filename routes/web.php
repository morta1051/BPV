<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;




    

    Route::resource('/companies',CompanyController::class);
    Route::resource('/Employees',EmployeeController::class);
   // route::post('/company/{id}/add-company', [CompanyController::class, 'addCompany'])->name('companys.addCompany');
    //Route::delete('/company/{companyId}/remove-company/{companyId}', [CompanyController::class, 'removeCompany'])->name('companys.removeCompany');

