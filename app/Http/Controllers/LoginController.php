<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function login()
    {
        return view('User.Auth.login');
    }

    public function authenticate(Request $request)
    {
        // dd($request);
        $credentials = $request->only('email', 'password');
        // $result = Auth::attempt($credentials);
        // dd($result);
        if (Auth::attempt($credentials)) {
            if (Auth::user()->isAdmin()) {
                return redirect()->intended('/admin-home');
            } elseif (Auth::user()->isTraveler()) {
                return redirect()->intended('/user/pembayaran');
            } else {
                // Authentication passed...
                return redirect()->intended('/');
            }
        } else {
            return redirect('/user/login')->with('flash_message_error', ' Email atau password anda salah!!');
        }
        // dd("false");

    }
    public function logout()
    {
        Auth::logout();

        return redirect()->intended('/');
    }
}
