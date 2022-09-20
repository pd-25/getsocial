@extends('Admin.mainlayout')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @if(Session::has('msg'))
                <p class="alert alert-info">{{ Session::get('msg') }}</p>
                @endif
                {{-- @if($errors->any())
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                @endif --}}
                <h4 class="card-title">Update User Data</h4>
                <form action="{{route('updateUser',$user->id)}}" method="post" enctype="multipart/form-data">
                    @csrf 
                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label"><b>Name:</b></label>
                    <div class="col-sm-10">
                        <input name="name" class="form-control" type="text" placeholder="Enter name...." id="example-text-input" value="{{$user->name}}">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label"><b>Email:</b></label>
                    <div class="col-sm-10">
                        <input name="email" class="form-control" type="email" placeholder="Enter Email...." id="example-text-input" value="{{$user->email}}">
                        @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label"><b>Password:</b></label>
                    <div class="col-sm-10">
                        <input name="password" class="form-control" type="password" placeholder="Enter password...." id="example-text-input" value="{{$user->password}}">
                        @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                    </div>
                </div>
                
            {{-- <label class="mr-5" for="image">Current Image</label>
            <img class="ml-5" height="80" width="100" src="/ProfileImages/{{$user->profile_image}}" alt=""> --}}

            <label for="example-text-input" class="col-sm-2 col-form-label"><b>Current Image</b></label>
                <img height="80" width="100" src="/ProfileImages/{{$user->profile_image}}" alt=""><br><br>

                <div class="row mb-3">
                    <label for="example-email-input" class="col-sm-2 col-form-label"><b>Image</b></label>
                    <div class="col-sm-10">
                        <input name="profile_image" type="file" class="form-control" id="example-email-input">
                        @if ($errors->has('profile_image'))
                        <span class="text-danger">{{ $errors->first('profile_image') }}</span>
                    @endif
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="example-email-input" class="col-sm-2 col-form-label"><b>Phone</b></label>
                    <div class="col-sm-10">
                        <input name="phone" type="number" class="form-control" id="example-email-input" value="{{$user->phone}}">
                        @if ($errors->has('phone'))
                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                    @endif
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="example-email-input" class="col-sm-2 col-form-label"><b>Status</b> </label>
                        <select name="status" class="form-control select2-search-disable">
                            <option>Select</option>
                            <option value="1" @if($user->status == 1) selected @endif>Active</option>
                            <option value="0" @if($user->status == 0) selected @endif>Inactive</option>  
                        </select>
                        @if ($errors->has('status'))
                        <span class="text-danger">{{ $errors->first('status') }}</span>
                    @endif
                </div>

                <div>
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </form>
            </div>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection