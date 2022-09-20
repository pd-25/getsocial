<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function aboutUs(){
        $data['title'] = 'about'; 
        //$data['menu_title'] = 'about';
        return view('User.aboutUs',$data);
    }
}
