<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function faq(){
        $data['title'] = 'faq'; 
        
        return view('User.faq');
    }

    public function contact(){
        $data['title'] = 'contact'; 
        return view('User.contact');
    }
}
