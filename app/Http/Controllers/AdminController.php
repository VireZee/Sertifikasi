<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    function register()
    {
        $data['title'] = 'Register';
        return view('admin/register', $data);
    }
    function register_action(Request $request)
    {
        $request->validate([
            'username_admin' => 'required|unique:admins',
            'password_admin' => 'required',
        ]);
        $user = new Admin([
            'username_admin' => $request->username,
            'password_admin' => Hash::make($request->password),
        ]);
        $user->save();
        return redirect()->route('login')->with('success', 'Registration success. Please login!');
    }
    function login()
    {
        $data['title'] = 'Login';
        return view('admin/login', $data);
    }
    function login_action(Request $request)
    {
        $request->validate([
            'username_admin' => 'required',
            'password_admin' => 'required',
        ]);
        if (Auth::attempt(['username.admin' => $request->username, 'password_admin' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('catalogadmin');
        }
        return back()->withErrors([
            'password_admin' => 'Wrong username or password',
        ]);
    }
    function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
