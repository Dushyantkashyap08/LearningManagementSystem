<?php

use App\Http\Controllers\LoginSignupController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminViewController;
use App\Http\Controllers\TeacherViewController;


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

//TeacherViewController Routes here
Route::get('/profile',[TeacherViewController::class,'viewProfile']);
Route::get('/performance',[TeacherViewController::class,'viewPerformance']);
Route::get('/lecture',[TeacherViewController::class,'viewLecture']);
Route::get('/batch',[TeacherViewController::class,'viewBatch']);
Route::get('/attendance',[TeacherViewController::class,'viewAttendance']);
Route::get('/assignment',[TeacherViewController::class,'viewAssignment']);
Route::get('/course',[TeacherViewController::class,'viewCourse']);

Route::get('/',function(){
    return view('login');
});

Route::post('/signup',[LoginSignupController::class,'signup']);