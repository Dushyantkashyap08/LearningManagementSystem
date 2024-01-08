<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherViewController extends Controller
{
    public function viewProfile()
    {
        return view('teacher-panel.profile');
    }
    public function viewPerformance()
    {
        return view('teacher-panel.student_performance');
    }
    public function viewAssignment()
    {
        return view('teacher-panel.assignment_review');
    }
    public function viewAttendance()
    {
        return view('teacher-panel.attendance');
    }
    public function viewLecture()
    {
        return view('teacher-panel.lecture_summary');
    }
    public function viewCourse()
    {
        return view('teacher-panel.create_course');
    }
    public function viewBatch()
    {
        return view('teacher-panel.batches');
    }
}
