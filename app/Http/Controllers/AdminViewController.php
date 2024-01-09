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

    public function viewChat()
    {
        return view('admin-panel.chat');
    }
    public function viewReport()
    {
        return view('admin-panel.report');
    }

   
}
