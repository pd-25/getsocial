<?php

namespace App\Http\Controllers\Admin\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cms\CmsCreateRequest;
use App\Models\Cms;
use Illuminate\Http\Request;
use PDO;

class CmsController extends Controller
{
    public function show(){
        $data['contents'] = Cms::get();
        return view('Admin.Cms.show',$data);
    }

    public function create(){
        
        return view('Admin.Cms.create');
    }

    public function store(CmsCreateRequest $request){
        $data = $request->except('_token');
        $store = Cms::create($data);
        if($store){
                    return redirect('admin/cms')->with('msg','Information inserted succesfully.');
        }else{
                    return redirect()->back()->with('msg','Information insertion failed! please fill properly');
        }
    }

    
    public function edit($id){
        $data['content'] = Cms::where('id',$id)->first();
        //dd($data);
        return view('Admin.Cms.edit',$data);
    }

    public function update(CmsCreateRequest $request,$id){

        $data = $request->except('_token','files');
        //dd($data);
         $update = Cms::where('id',$id)->update($data);
         if($update){
            return redirect('admin/cms')->with('msg','Information Updated succesfully.');
        }else{
            return redirect()->back()->with('msg','Information Updation failed! please fill properly');
        }

    }

    public function delete($id){
$dalete = Cms::where('id',$id)->delete();
if($dalete){
    return redirect()->back()->with('msg','Deleted Successfully');
}else{
    return redirect()->back()->with('msg','Content not deleted, Something went wrong!');

}
    }
}
