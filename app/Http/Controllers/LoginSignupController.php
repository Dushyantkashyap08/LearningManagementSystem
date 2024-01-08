<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginSignupController extends Controller
{
    public function login( Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('name', 'email', 'password');
        $user = User::where('email', $credentials['email'])->get();

        if (Auth::guard('web')->attempt($credentials)) {

            $user = Auth::guard('web')->user();

            if ($user->role === 'super_admin') {

                return redirect('/admin-profile');
            } elseif ($user->role === 'teacher') {

                return redirect('/teacher-profile');
            }
        }

        return redirect()->back()->with('error', 'fill right details');
    }

    public function signup( Request $request)
    {
        $Datavalidate = $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        $user = User::create([
            'name' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
      
        if($user)
        {
            return redirect()->back()->with('RegSuccess', ' registration successful, Please Login');
        }
        else
        {
            return redirect()->back()->with('RegError', ' registration not successfull');
        }

    }


    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/');
    }
}