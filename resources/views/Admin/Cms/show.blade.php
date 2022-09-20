@extends('Admin.mainlayout')


@section('content')

<div class="row">
    <div class="col-lg-12">
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
                <h4 class="card-title">CMS</h4>
                <div>
                    {{-- <button class="btn btn-primary" type="submit">Add</button> --}}
                  {{-- <a href="{{url('admin/cms/create')}}" class="btn btn-primary" type="button" name="submit">Add</a> --}}

                    
                </div>
               

                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Page Title</th>
                                <th>Page Text</th>
                                <th>Content</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contents as $item)
                                
                           
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{$item->page_title}}</td>
                                <td>{{$item->page_text}}</td>
                                <td>{{ htmlspecialchars(trim(strip_tags($item->content)))}}</td>
                                
                                <td> <a href="{{route('cmsEdit',$item->id)}}" class="btn btn-primary" type="button" name="submit">Edit</a></td>
                                {{-- <td> <a href="{{route('cmsDelete',$item->id)}}" class="btn btn-primary" type="button" name="submit">Delete</a></td> --}}
                            </tr>
                            
                            @endforeach
                           
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- end row -->

</div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
    
@endsection