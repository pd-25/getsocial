<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['title'] = 'home'; 
        return view('home');
    }

    public function userUashboard()
    {
        
        return view('User.userDashboard');
    }
    
    public function changePassword()
    {
        
        return view('User.changePassword');
    }

    public function bookinghistory()
    {
        
        return view('User.bookinghistory');
    }

    
    
}
