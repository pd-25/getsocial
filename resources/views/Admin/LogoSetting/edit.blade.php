@extends('Admin.mainlayout')
@section('title', 'logo settings')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @if(Session::has('msg'))
                <p class="alert alert-info">{{ Session::get('msg') }}</p>
                @endif
                @if($errors->any())
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                @endif
                <h4 class="card-title">Site Settings</h4>
                <form action="{{route('logoUpdate',$sitesetting_item->id)}}" method="post" enctype="multipart/form-data">
                    @csrf 
                  
                        <label for="example-text-input" class="col-sm-2 col-form-label"><b>Current Favicon Image:</b></label>
                        <img height="80" width="100" src="/LogoImages/{{$sitesetting_item->favicon_image}}" alt=""><br><br>
                    
                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label"><b>Favicon Image:</b></label>
                    <div class="col-sm-10">
                        <input name="favicon_image" class="form-control" accept=".jpg, .png, .jpeg|image/*" type="file"  id="example-text-input" value="{{$sitesetting_item->favicon_image}}">
                    </div>
                </div>
            
                
                    <label for="example-text-input" class="col-sm-2 col-form-label"><b>Current Logo Image:</b></label>
                    <img height="80" width="100" src="/LogoImages/{{$sitesetting_item->logo_image}}" alt=""><br><br>
              
                <div class="row mb-3">
                    <label for="example-email-input" class="col-sm-2 col-form-label"><b>Logo Image</b></label>
                    <div class="col-sm-10">
                        <input name="logo_image" class="form-control" accept=".jpg, .png, .jpeg|image/*" type="file"  id="example-email-input" value="{{$sitesetting_item->logo_image}}" >
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="example-tel-input" class="col-sm-2 col-form-label"><b>Site Name</b></label>
                    <div class="col-sm-10">
                        <input name="site_name" class="form-control" type="text" placeholder="sfo" id="example-tel-input" value="{{$sitesetting_item->site_name}}">
                    </div>
                </div>

                
                
                {{-- <div class="row mb-3">
                    <label for="example-password-input" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="password" value="hunter2" id="example-password-input">
                    </div>
                </div> --}}
                
                <div>
                    <button class="btn btn-primary"  type="submit">Save</button>
                </div>
            </form>
            </div>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection