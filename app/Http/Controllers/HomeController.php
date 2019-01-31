<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->session()->put('infoUser', Auth::User());
        $userCookie = cookie('user', Auth::user()->name, 60);
        $request->user()->authorizeRoles(['user', 'admin']);
        return response()->view('home')->cookie($userCookie);
    }
}
