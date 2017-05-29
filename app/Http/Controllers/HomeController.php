<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function login()
    {
        return view('login');   
    }
    public function post_login(Request $r)
    {
        $this->validate($r, [
            'username'     => 'required',
            'password'  => 'required'
        ]);

        if (Auth::attempt(['username' => $r->username, 'password' => $r->password])) {
            return redirect()->intended('profile/'.$r->username);
        }

        return redirect()->back()->with('error','email dan password yang anda masukan tidak sesuai');
    }
    public function register()
    {
        if (Auth::check()) {
            return redirect('home');
        }
        return view('auth.register');
    }
}
