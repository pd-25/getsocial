

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
                <h4 class="card-title">Client</h4>
                <form action="{{ url('/admin/client/update/') }}" method='POST' enctype="multipart/form-data">
                    @csrf 
                    <input  type="hidden" name="testimonial_id" class="form-control" value="{{$client->testimonial_id}}">
                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label"><b>Owner Name:</b></label>
                    <div class="col-sm-10">
                        <input name="owner_name" class="form-control" value="{{$client->owner_name}}" type="text" placeholder="Enter name...." id="example-text-input">
                    </div>
                </div>

                {{-- <img height="200px" width="100px" src="/ClientImage/{{$client->image}}" alt=""> --}}
                <label for="example-text-input" class="col-sm-2 col-form-label"><b>Current Favicon Image:</b></label>
                <img height="80" width="100" src="/ClientImage/{{$client->image}}" alt=""><br><br>
            
                <div class="row mb-3">
                    <label for="example-email-input" class="col-sm-2 col-form-label"><b>Image</b></label>
                    <div class="col-sm-10">
                        <input name="image" type="file" class="form-control" type="text"  id="example-email-input" value="{{$client->image}}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="example-email-input" class="col-sm-2 col-form-label"><b>Description</b></label>
                    <div class="col-sm-10">
                        {{-- <textarea name="content" id="description" class="form-control"  placeholder="Enter ..." ></textarea> --}}
                        <textarea name="description" id="your_summernote" class="form-control" rows="4">{{$client->description}}</textarea>

                    </div>
                </div>

                <div class="row mb-3">
                    <label for="example-email-input" class="col-sm-2 col-form-label"><b>Status</b> </label>
                        <select name="status" class="form-control select2-search-disable">
                            <option>Select</option>
                            <option value="1" @if($client->status == 1) selected @endif>Active</option>
                            <option value="0" @if($client->status == 0) selected @endif>Inactive</option>  
                        </select>
                </div>

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