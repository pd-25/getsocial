<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OurServiceController extends Controller
{
    public function ourService(){
        $data['title'] = 'service'; 
         
        return view('User.ourService');
    }
}
