
@extends('Admin.mainlayout')

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
                <h4 class="card-title"><b>Profile</b></h4>
                <form action="{{ route('update-profile') }}" method="post" enctype="multipart/form-data">
                    @csrf 
                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label"><b>Name:</b></label>
                    <div class="col-sm-10">
                        <input name="name" class="form-control" type="text" placeholder="Enter name...." id="example-text-input" value="{{ $content[0]->name }}">
                    </div>
                </div>
            
                <div class="row mb-3">
                    <label for="example-email-input" class="col-sm-2 col-form-label"><b>Email:</b></label>
                    <div class="col-sm-10">
                        <input name="email" class="form-control" type="email" placeholder="Enter email...." id="example-email-input" value="{{$content[0]->email}}">
                    </div>
                </div>
             
                    <label for="example-text-input" class="col-sm-2 col-form-label"><b>Current  Image:</b></label>
                    <img height="80" width="100" src="/ProfileImages/{{$content[0]->profile_image}}" alt=""><br>
                
                <div class="row mb-3">
                    <label for="example-email-input" class="col-sm-2 col-form-label"><b>New Image</b></label>
                    <div class="col-sm-10">
                        <input name="profile_image" class="form-control" accept=".jpg, .png, .jpeg|image/*" type="file"  id="example-email-input" value="{{$content[0]->profile_image}}" >
                    </div>
                </div>
                
                
                
                
                <div>
                    <button class="btn btn-primary"  type="submit">Update</button>
                </div>
            </form>
            </div>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection