<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\User;

class SuperAdminController extends Controller
{
    public function addCourse(Request $request){
        $courseData = $request->validate([
            'coursename' => 'required',
            'teachername' => 'required',
            'totalstudents' => 'required',
            'duration' => 'required',
        ]);

        
        $course = new Courses;
        
        $course->course = $request->coursename;
        $course->teacher_name = $request->teachername;
        $course->students_enrolled = $request->totalstudents;
        $course->duration = $request->duration;
        $course->save();
        // dd($course);

        if($course)
        {
            return redirect()->back()->with('success', 'Course added successfully!');
        }
        else
        {
            return redirect()->back()->with('error', 'Error Occured!');
        }

    }
    public function addTeacher(Request $request){
        $teacherData = $request->validate([
            'teachername' => 'required',
            'teacheremail' => 'required|email', // Add email validation rule
            'teacherpassword' => 'required',
        ]);
    
        // Create a new User instance
        $teacher = new User;
    
        // Set user role to 'teacher'
        $teacher->role = 'teacher';
    
        $teacher->name = $request->teachername;
        $teacher->email = $request->teacheremail;
        $teacher->password = $request->teacherpassword;
        $teacher->save();
    
        if($teacher)
        {
            return redirect()->back()->with('success', 'Teacher added successfully!');
        }
        else
        {
            return redirect()->back()->with('error', 'Error Occurred!');
        }
    }
   
    
    public function viewStudent(){
        $data = User::where('role', 'student')->paginate(5);
        return view('admin-panel.students', compact('data')); 
    }
    public function viewTeacher(){
        $data = User::where('role', 'teacher')->paginate(5);
        return view('admin-panel.teachers', compact('data')); 
    }
    

    public function viewCourse(){

        $data = Courses::paginate(5);
        return view('admin-panel.courses',compact('data')); 
    }
}
