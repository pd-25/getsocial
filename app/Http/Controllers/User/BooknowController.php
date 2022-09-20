<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BooknowController extends Controller
{
    public function bookNow()
    {
        return view('User.bookNow');
    }
}
