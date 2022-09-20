<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function review()
    {
        $data['title'] = 'review'; 

        return view('User.review');
    }
}
