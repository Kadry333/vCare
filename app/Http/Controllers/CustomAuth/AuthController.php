<?php

namespace App\Http\Controllers\CustomAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }
    public function login()
    {
        return view('auth.login');
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'name'=>['required','string','max:225'],
                'email'=>['required','string','max:225','email','unique:users'],
                'password'=>['required','string','min:8','confirmed'],
            ]
            );
            $user = User::create(
                [
                'name'=>$request->name,
                'password'=>$request->password,
                'email'=>$request->email,
                ]
                );
            auth()->login($user);
            return redirect()->route('home');

    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
    public function login_store(Request $request)
    {
        //validation
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        if (Auth::attempt($request->only('email', 'password')))//checks if email and password are in the db
        {

            $request->session()->regenerate();//for security
            return redirect()->route('home');
        }

        return back()->withErrors([
            'email' => 'Invalid email or password, please try again.',
        ])->onlyInput('email');
    }
}
