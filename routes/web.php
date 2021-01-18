<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\VisitasController;


Route::get('/', [EmployeeController::class, 'getData']);

Route::get('/convert-to-json', function () {
    return App\Models\Employee::paginate(5);
});

Route::get('/img', function(){
	return view('img-backg');
});



Route::get('/visitas', [VisitasController::class, 'index']);