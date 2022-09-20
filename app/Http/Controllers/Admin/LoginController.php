<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function logIn(){
        return view('Admin.login');
    }

    public function loggedIn(AdminLoginRequest $request)
    {
        $user =  User::where('email',$request->email)->where('role',1)->first();
        
        if(!$user || !Hash::check($request->password,$user->password)){
            return redirect()->back()->with('msg','Cradentials are wrong! Provide correct information');
        } else{
           //dd($user->id);
           Session::put('adminLogin',[$user->id,$user->role]);
//dd($request);
           //dd(Session::get('adminLogin'));
            return redirect()->intended('admin/dashboard');

         }   
    }
    
     public function logOut(){
        Session::forget('adminLogin');
        return redirect('admin');
    }
}
