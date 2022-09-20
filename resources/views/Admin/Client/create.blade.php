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
                <h4 class="card-title">Add New Testimonial</h4>
                <form action="{{url('admin/client/store')}}" method="post" enctype="multipart/form-data">
                    @csrf 
                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label"><b>Owner Name:</b></label>
                    <div class="col-sm-10">
                        <input name="owner_name" class="form-control" type="text" placeholder="Enter name...." id="example-text-input">
                    </div>
                </div>
            
                <div class="row mb-3">
                    <label for="example-email-input" class="col-sm-2 col-form-label"><b>Image</b></label>
                    <div class="col-sm-10">
                        <input name="image" type="file" class="form-control" type="text"  id="example-email-input">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="example-email-input" class="col-sm-2 col-form-label"><b>Description</b></label>
                    <div class="col-sm-10">
                        {{-- <textarea name="content" id="description" class="form-control"  placeholder="Enter ..." ></textarea> --}}
                        <textarea name="description" id="your_summernote" class="form-control" rows="4"></textarea>

                    </div>
                </div>

                <div class="row mb-3">
                    <label for="example-email-input" class="col-sm-2 col-form-label"><b>Status</b> </label>
                        <select name="status" class="form-control select2-search-disable">
                            <option>Select</option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>  
                        </select>
                </div>

                <div>
                    <button class="btn btn-primary" name="submit" type="submit">Save</button>
                </div>
            </form>
            </div>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection