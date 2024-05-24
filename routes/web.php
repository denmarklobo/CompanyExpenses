<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ExpenseController;

Route::get('/expenses', [ExpenseController::class, 'index'])->name('expenses.index');
Route::get('/expenses/create', [ExpenseController::class, 'create'])->name('expenses.create');
Route::get('/expenses/{expense}/edit', [ExpenseController::class, 'edit'])->name('expenses.edit');


Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
Route::get('/employees/{employee}', [EmployeeController::class, 'show'])->name('employees.show');
Route::put('/employees/{employee}', [EmployeeController::class, 'update'])->name('employees.update');
Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy'])->name('employees.destroy');



Route::get('/', function () {
    return view('welcome');
});
