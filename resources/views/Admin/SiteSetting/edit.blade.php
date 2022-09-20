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
                <h4 class="card-title">Site Settings</h4>
                <form action="{{route('update',$sitesetting_item->id)}}" method="post">
                    @csrf 
                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label"><b>Address:</b></label>
                    <div class="col-sm-10">
                        <input name="address" class="form-control" type="text" placeholder="Enter Address...." id="example-text-input" value="{{$sitesetting_item->address}}">
                    </div>
                </div>
            
                <div class="row mb-3">
                    <label for="example-email-input" class="col-sm-2 col-form-label"><b>Email</b></label>
                    <div class="col-sm-10">
                        <input name="email" class="form-control" type="email" placeholder="sforiders@example.com" id="example-email-input" value="{{$sitesetting_item->email}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="example-tel-input" class="col-sm-2 col-form-label"><b>Phone</b></label>
                    <div class="col-sm-10">
                        <input name="phone" class="form-control" type="tel" placeholder="1-(555)-555-5555" id="example-tel-input" value="{{$sitesetting_item->phone}}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="example-url-input" class="col-sm-2 col-form-label"><b>Twitter</b></label>
                    <div class="col-sm-10">
                        <input name="twitter" class="form-control" type="url" placeholder="https://twitter.com/sfoblackrider" id="example-url-input" value="{{$sitesetting_item->twitter}}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="example-url-input" class="col-sm-2 col-form-label"><b>Facebook</b></label>
                    <div class="col-sm-10">
                        <input name="facebook" class="form-control" type="url" placeholder="https://facebook.com/sfoblackrider" id="example-url-input" value="{{$sitesetting_item->facebook}}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="example-url-input" class="col-sm-2 col-form-label"><b>YouTube</b></label>
                    <div class="col-sm-10">
                        <input name="youtube" class="form-control" type="url" placeholder="https://youtube.com/sfoblackrider" id="example-url-input" value="{{$sitesetting_item->youtube}}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="example-url-input" class="col-sm-2 col-form-label"><b>Instagram</b></label>
                    <div class="col-sm-10">
                        <input name="instagram" class="form-control" type="url" placeholder="https://instagram.com/sfoblackrider" id="example-url-input" value="{{$sitesetting_item->instagram}}">
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