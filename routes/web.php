<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/employee', [EmployeeController::class, 'index'])->name('pegawai');

Route::get('/employee/insert', [EmployeeController::class, 'insert'])->name('insert');

Route::post('/employee/insert/post', [EmployeeController::class, 'insertPost'])->name('insertPost');

Route::get('/employee/{id}', [EmployeeController::class, 'showDetail'])->name('showDetail');

Route::post('/update/{id}', [EmployeeController::class, 'update'])->name('update');

Route::get('/delete/{id}', [EmployeeController::class, 'delete'])->name('delete');