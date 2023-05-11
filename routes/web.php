<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Employeecontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/',[Employeecontroller::class,'index'])->name("employee.index");
Route::get('products/create',[Employeecontroller::class,'create'])->name("products.create");
Route::post('products/store',[Employeecontroller::class,'store'])->name("products.store");
Route::get('products/{id}/edit',[Employeecontroller::class,'edit'])->name("products.edit");
Route::PUT('products/{id}/update',[Employeecontroller::class,'update'])->name("products.update");
Route::get('products/{id}/delete',[Employeecontroller::class,'destroy'])->name("products.destroy");