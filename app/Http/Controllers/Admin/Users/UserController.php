<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function listOfUsers(){
        $data['listOfUsers'] = User::where('role',0)->get();
        return view('Admin.User.listOfUsers',$data);
    }

    public function addUser()
    {
        return view('Admin.User.create');
    }

    public function storeUser(Request $request){

        $request->validate([
             'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'image' =>['image|mimes:jpg,png,jpeg,gif,svg|max:2048'],
            'phone' => ['required', 'numeric'],
        ]);

        $data = $request->except('_token', 'profile_image','password');

    $profileImageName = '';

        if ($request->has('profile_image')) {
            $image = $request->file('profile_image');
            $profile_img = time().rand(0000,9999).'.'.$image->getClientOriginalExtension();
            $profileImageName = $image->move('ProfileImages', $profile_img);
            //storePubliclyAs
            $data['profile_image'] = $profile_img;

        }
        $data['password'] = Hash::make($request->password);
        
        $store = User::create($data);

        if($store){
            return redirect('admin/users/list-of-user')->with('msg','User Created Successfully');
           }else{
            return redirect()->back()->with('msg','User Creation failed');
    
        }
    }

    public function editUser( $id, Request $request){
        $data['user'] = User::where('id',$id)->first();
        return view('Admin.User.edit',$data);
    }

    public function updateUser($id, Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
           'email' => ['required', 'string', 'email', 'max:255'],
           'password' => ['required', 'string', 'min:8'],
           'image' =>['image|mimes:jpg,png,jpeg,gif,svg|max:2048'],
           'phone' => ['required', 'numeric'],
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
        //dd($data);

        $old_pass = User::where('id',$id)->select('password')->first();
        if($data['password'] == $old_pass->password){
            //dd("same");
            $data['password'] = $request->password;
        }else{
            //dd("not");

            $data['password'] = Hash::make($request->password);

        }


        $update = User::where('id',$id)->update($data);

        if($update){
            return redirect('admin/users/list-of-user')->with('msg','User Updated Successfully');
           }else{
            return redirect()->back()->with('msg','User Updation failed');
    
        }

    }
}
