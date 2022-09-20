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
                <h4 class="card-title">Create Content</h4>
                <form action="{{route('cmsUpdate',$content->id)}}" method="post">
                    @csrf 
                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label"><b>Page Title:</b></label>
                    <div class="col-sm-10">
                        <input name="page_title" class="form-control" type="text" placeholder="Enter Title...." id="example-text-input" value="{{$content->page_title}}">
                    </div>
                </div>
            
                <div class="row mb-3">
                    <label for="example-email-input" class="col-sm-2 col-form-label"><b>Page Text</b></label>
                    <div class="col-sm-10">
                        <input name="page_text" class="form-control" type="text" placeholder="Enter text...." id="example-email-input" value="{{$content->page_text}}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="example-email-input" class="col-sm-2 col-form-label"><b>Content</b></label>
                    <div class="col-sm-10">
                      
                        <textarea name="content" id="your_summernote" class="form-control" rows="4">{{$content->content}}</textarea>

                    </div>
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