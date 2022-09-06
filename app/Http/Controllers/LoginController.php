<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'nama' => ['required'],
            'password' => ['required'],
        ]);
        // dd(Auth::attempt($credentials));
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            // dd($request->session()->regenerate());
            return redirect()->intended('/admin');
        }
        return back()->withErrors([
                 'nrp' => 'The provided credentials do not match our records.',
            ]);

        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();

        //     return redirect()->intended('admin');
        // }

        // return back()->withErrors([
        //     'nrp' => 'The provided credentials do not match our records.',
        // ]);
    }
}
