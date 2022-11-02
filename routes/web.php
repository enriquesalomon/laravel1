<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
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

//common routes naming
//index =  Show all data or Student
//show = show a single data or student
//create = show a form to a new user
//store = store a data
//edit= show form to a data
//update = updata a data
//destroy = delete a data 


Route::get('/', [StudentController::class, 'index'])->middleware('auth');
Route::get('/register',[UserController::class, 'register']);
Route::get('/login',[UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login/process',[UserController::class, 'process']);
Route::post('/store',[UserController::class, 'store']);


Route::post('/logout',[UserController::class, 'logout']);

Route::get('/add/student',[StudentController::class, 'create']);
Route::post('/add/student',[StudentController::class, 'store']);