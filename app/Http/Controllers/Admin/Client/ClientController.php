<?php

namespace App\Http\Controllers\Admin\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\ClientRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function show()
    {
       $data['clients'] = Client::get();
       return view('Admin.Client.show',$data);

    }

    
    public function create()
    {
     
       return view('Admin.Client.create');

    }

    public function store(ClientRequest $request){
        $data = $request->except('_token','image');

        $imagefaviconname = '';

        if ($request->has('image')) {
            //dd($request->image);
            $image = $request->file('image');
            //dd($image);

            $client_img = time().rand(0000,9999).'.'.$image->getClientOriginalExtension();
           // dd($client_img);
            $imagefaviconname = $image->move('ClientImage', $client_img);
            //storePubliclyAs
        $data['image'] = $client_img;

        }
        $store = Client::create($data);
        if($store){
                    return redirect('admin/client')->with('msg','Information inserted succesfully.');
        }else{
                    return redirect()->back()->with('msg','Information insertion failed! please fill properly');
        }
    }

    public function edit($id){
        $data['client'] = Client::where('testimonial_id',$id)->first();
        // dd($data); 
        return view('Admin.Client.edit',$data);
    }

    // public function up(){
    //     dd("sghgsdjhsdgj");
    // }

    public function update(ClientRequest $request){
       // dd('hello');
        $data = $request->except('_token', 'image');
        //dd($data);
        $imagefaviconname = '';

        if ($request->has('image')) {

            $image = $request->file('image');
            // dd($image);

            $client_img = time().rand(0000,9999).'.'.$image->getClientOriginalExtension();
            // dd($favicon);
            $imagefaviconname = $image->move('ClientImage', $client_img);
            //storePubliclyAs
            $data['image'] = $client_img;

        }

      

        else{
            $img = Client::where('testimonial_id',$request->testimonial_id)->first();
            $data['image'] = $img->image;
        }
        //dd($data);

        $update = Client::where('testimonial_id',$request->testimonial_id)->update($data);

        if($update){
            return redirect('admin/client')->with('msg','Information Updated succesfully.');
        }else{
            return redirect()->back()->with('msg','Information Updation failed! please fill properly');
        }
    }

    public function deleteclient(){

         dd($_POST);
        
        // $dalete = Client::where('testimonial_id',$id)->delete();
        // if($dalete){
        //     return redirect()->back()->with('msg','Deleted Successfully');
        // }else{
        //     return redirect()->back()->with('msg','Content not deleted, Something went wrong!');
        
        // }

        $delete_chef = Client::findorfail();
        $delete_chef->delete();
        return response()->json([
            'status'=> 'deleted successfully'
        ]);
    }
}
