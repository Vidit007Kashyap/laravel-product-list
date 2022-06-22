<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //
    public function index()
    {
        return view('Auth.login');
    }

    public function register()
    {
        return view('Auth.register');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password' => 'required'
        ]);
        if(Auth::attempt($request->only('email','password')))
        {
            return redirect()->to('home');
        }
        return redirect('login')->withErrors('Error');
    }

    public function registerUser(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|confirmed',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password) 
        ]);

        if(Auth::attempt($request->only('email','password')))
        {
            return redirect()->to('home');
        }
        return redirect('register')->withErrors('Error');
    }

    public function authenticated()
    {
        return view('Dashboard.index');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/');
    }
}
