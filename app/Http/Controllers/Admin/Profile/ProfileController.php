<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function show(){
        
        return view('Admin.Profile.changePassword');
    }

    public function store(Request $request){
        // dd("ggg");
        $request->validate([
            'current_password' => ['required'],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        $old_password = User::where('role',1)->first();
        if(Hash::check($request->current_password,$old_password->password)){
            $update_password = $old_password->update(['password'=> Hash::make($request->new_password)]);
            if($update_password){
                return redirect()->back()->with('msg','Password updated successfully');
            }else{
                return redirect()->back()->with('msg','Password updation failed');

            }
    }
}

public function profile(){
        $data['content'] = User::where('role',1)->get();
        //dd($data);
        return view('Admin.Profile.profile',$data);
}

public function updateProfile(Request $request){
    $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        
    ]);
    $data = $request->except('_token', 'profile_image');

    $profileImageName = '';

        if ($request->has('profile_image')) {
            $image = $request->file('profile_image');
            $profile_img = time().rand(0000,9999).'.'.$image->getClientOriginalExtension();
            $profileImageName = $image->move('ProfileImages', $profile_img);
            //storePubliclyAs
            $data['profile_image'] = $profile_img;

        }
        else{
            $img = user::where('id',2)->first();
            $data['profile_image'] = $img->logo_image;
        }
       // dd($data);

       $update = User::where('role',1)->update($data);
       if($update){
        return redirect()->back()->with('msg','Profile Information Updated Successfully');
       }else{
        return redirect()->back()->with('msg','Profile Information Updation failed');

       }
}
}
