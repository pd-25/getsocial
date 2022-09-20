<?php

namespace App\Http\Controllers;

use App\Http\Requests\LogoSetting\LogoSettingUpdateRequest;
use App\Http\Requests\SiteSetting\SiteSettingCreateRequest;
use App\Models\Logo;
use App\Models\Site_setting;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    // public function show(){
    //     $data['sitesetting_list'] = Site_setting::get();
    //     //dd($data);
    //     return view('Admin.SiteSetting.show',$data);
    // }
    // public function create(){
    //     return view('Admin.SiteSetting.create');
    // }

    // public function store(SiteSettingCreateRequest $request){

    //     $data = $request->except('_token');
    //     //dd($data);
    //     $store = Site_setting::create($data);
    //     if($store){
    //         return redirect('admin/Settings/site-setting')->with('msg','Information inserted succesfully.');
    //     }else{
    //         return redirect()->back()->with('msg','Information insertion failed! please fill properly');
    //     }

    // }

    public function edit(){
        $data['sitesetting_item'] = Site_setting::where('id',1)->first();
       // dd($data);
        return view('Admin.SiteSetting.edit',$data);
    }

    public function update(SiteSettingCreateRequest $request){

        $data = $request->except('_token');
        //dd($data);
        $store = Site_setting::where('id',1)->update($data);
        if($store){
            return redirect('admin/Settings/site-setting/edit')->with('msg','Information Updated succesfully.');
        }else{
            return redirect()->back()->with('msg','Information Updation failed! please fill properly');
        }

    }


    //logo-settings\

    public function logoEdit(){
        $data['sitesetting_item'] = Logo::where('id',2)->first();
        // dd($data);
         return view('Admin.LogoSetting.edit',$data);
    }

    public function logoUpdate(LogoSettingUpdateRequest $request){

        $data = $request->except('_token', 'favicon_image', 'logo_image');
        //dd($data);
        $imagefaviconname = '';

        if ($request->has('favicon_image')) {

            $image = $request->file('favicon_image');
            // dd($image);

            $favicon = time().rand(0000,9999).'.'.$image->getClientOriginalExtension();
            // dd($favicon);
            $imagefaviconname = $image->move('LogoImages', $favicon);
            //storePubliclyAs
        $data['favicon_image'] = $favicon;

        }

        //dd($data);

        else{
            $img = Logo::where('id',2)->first();
            $data['favicon_image'] = $img->favicon_image;
        }
        $imagelogoname = '';

        if ($request->has('logo_image')) {
            $image = $request->file('logo_image');
            $logo = time().rand(0000,9999).'.'.$image->getClientOriginalExtension();
            $imagelogoname = $image->move('LogoImages', $logo);
            //storePubliclyAs
            $data['logo_image'] = $logo;

        }
        else{
            $img = Logo::where('id',2)->first();
            $data['logo_image'] = $img->logo_image;
        }
        // dd($data);

        $update = Logo::where('id',2)->update($data);
        if($update){
            return redirect('admin/Settings/logo-setting/edit')->with('msg','Information Updated succesfully.');
        }else{
            return redirect()->back()->with('msg','Information Updation failed! please fill properly');
        }

    }
}
