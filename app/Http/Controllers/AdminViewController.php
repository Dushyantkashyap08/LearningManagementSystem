<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Post;
// use App\Models\Comments;
// use App\Models\User;

class AdminViewController extends Controller
{
    public function viewDashboard()
    {
        return view('admin-panel.dashboard');
    }
    public function viewClasses()
    {
        return view('admin-panel.classes');
    }
    public function viewCourses()
    {
        return view('admin-panel.courses');
    }
    public function viewStudents()
    {
        return view('admin-panel.students');
    }
    public function viewTeachers()
    {
        return view('admin-panel.teachers');
    }
    public function viewChat()
    {
        return view('admin-panel.chat');
    }
    public function viewReports()
    {
        return view('admin-panel.reports');
    }

   
}
