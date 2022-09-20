<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function dashboard(){
        
        if((Session::get('adminLogin'))){
            return view('Admin.Dashboard');

        }else{
            return redirect('admin');
        }
    }

   
}
