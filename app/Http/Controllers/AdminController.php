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
            'username' => 'required|unique:admins',
            'password' => 'required',
        ]);
        $user = new Admin([
            'username' => $request->username,
            'password' => Hash::make($request->password),
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
            'username' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect('catalogadmin');
        }
        return back()->withErrors([
            'password' => 'Wrong username or password',
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
