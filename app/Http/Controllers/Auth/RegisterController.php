<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    
    public function showRegistrationForm()
    {
        return view('auth.register');
    }
    public function create(Request $request){

        User::create([
            'nama_lengkap' =>$request->nama_lengkap,
            'email'=> $request->email,
            'password' => Hash::make($request->password),
            'nohp'=>$request->nohp,
            'ktp'=>$request->ktp
        ]);
        
        return view('login');
    }
    
}
