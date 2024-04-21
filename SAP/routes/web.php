<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\EmployeeController;

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


Route::get('login/', AuthenticationController::class . '@view_login');
Route::get('register/', AuthenticationController::class . '@view_register');
Route::post('Register/', AuthenticationController::class . '@register');
Route::post('Login/', AuthenticationController::class . '@login');


Route::middleware('auth')->group(function(){
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::get('employees', EmployeeController::class . '@index');
    Route::post('employees/store/', EmployeeController::class . '@store');
    


});



