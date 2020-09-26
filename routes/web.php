<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;






Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/meni', [HomeController::class, 'meni'])->name('meni');



Route::resource('/posts', PostController::class);

Route::get('/resize-image',[ImageController::class,'resizeImage']);
Route::post('/resize-image',[ImageController::class,'resizeImageSubmit'])->name('image.resize');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('/employee', EmployeeController::class);
Route::post('/employee', [EmployeeController::class,'store'])->name('addimage');

Route::get('/employees', [EmployeeController::class, 'showing']);
Route::get('/employeeform', [EmployeeController::class, 'store']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('/form', FormController::class);
Route::post('/form', [FormController::class, 'forms'])->name('formaa');


