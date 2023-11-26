<?php

use App\Http\Controllers\AssignmentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});



Route::group(['prefix'=> 'admin'], function () {
    Route::get('/master',[AssignmentController::class,'master'])->name('master');
    Route::get('/home',[AssignmentController::class,'home'])->name('home');
    Route::get('/about',[AssignmentController::class,'about'])->name('about');
    Route::get('/project',[AssignmentController::class,'project'])->name('project');
    Route::get('/contact',[AssignmentController::class,'contact'])->name('contact');
});