<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\employeeController;
use \App\Http\Controllers\projectController;
use \App\Http\Controllers\departmentController;
use \App\Http\Controllers\dependentController;
use App\Http\Controllers\deptsLocationsController;
use App\Http\Controllers\landingController;
use App\Http\Controllers\worksOnController;

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

Route::get('/' , [landingController::class , 'index']);
Route::get('/employees' , [employeeController::class , 'index'])->name('dashboard');
Route::get('/employees/create' , [employeeController::class , 'create']);
Route::post('/employees', [employeeController::class , 'store'])->name('employees_store');

Route::get('/department' , [departmentController::class , 'index'])->name('department');
Route::get('/department/create' , [departmentController::class , 'create']);
Route::post('/department', [departmentController::class , 'store'])->name('department_store');

Route::get('/project' , [projectController::class , 'index'])->name('project');
Route::get('/project/create' , [projectController::class , 'create']);
Route::post('/project', [projectController::class , 'store'])->name('project_store');

Route::get('/dependent' , [dependentController::class , 'index'])->name('dependent');
Route::get('/dependent/create' , [dependentController::class , 'create']);
Route::post('/dependent', [dependentController::class , 'store'])->name('dependent_store');

Route::get('/depts-locations' , [deptsLocationsController::class , 'index'])->name('depts');
Route::get('/depts-locations/create' , [deptsLocationsController::class , 'create']);
Route::post('/depts-locations', [deptsLocationsController::class , 'store'])->name('depts_store');

Route::get('/works-on' , [worksOnController::class , 'index'])->name('works');
Route::get('/works-on/create' , [worksOnController::class , 'create']);
Route::post('/works-on', [worksOnController::class , 'store'])->name('works_store');

