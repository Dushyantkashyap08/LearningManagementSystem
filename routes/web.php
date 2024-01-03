<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminViewController;

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

//AdminViewController Routes here
Route::get('/home',[AdminViewController::class,'viewDashboard']);
Route::get('/course',[AdminViewController::class,'viewCourses']);
Route::get('/class',[AdminViewController::class,'viewClasses']);
Route::get('/students',[AdminViewController::class,'viewStudents']);
Route::get('/teachers',[AdminViewController::class,'viewTeachers']);
Route::get('/chats',[AdminViewController::class,'viewChats']);
Route::get('/report',[AdminViewController::class,'viewReport']);
