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
                <h4 class="card-title">List of all Users</h4>
                <div>
                    {{-- <button class="btn btn-primary" type="submit">Add</button> --}}
                  {{-- <a href="{{url('admin/client/create')}}" class="btn btn-primary" type="button" name="submit">Add</a> --}}

                    
                </div>
               

                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th> Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Action</th>
                                {{-- <th>Status</th>
                                <th>Action</th> --}}
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listOfUsers as $item)
                                
                           
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{$item->name}}</td>
                                {{-- <td><img height="80" width="100" src="/ClientImage/{{$item->image}}" alt=""></td> --}}
                                <td>{{ $item->email  }}</td>
                                <td>{{ $item->phone  }}</td>
                                <td><div class="square-switch">
                                    <input name="toogle"  type="checkbox" id="square-switch1" data-toggle="switchbutton" data-of switch="none" {{$item->status == 1 ? 'checked': ''}}/>
                                    <label for="square-switch1" data-on-label="On"
                                        data-off-label="Off"></label>
                                </div></td>
                                
                                <td> <a href="{{route('editUser',$item->id)}}" class="btn btn-primary" type="button" name="submit">Edit</a>
                                    <a href="#" class="btn btn-danger" type="button" name="submit">Delete</a>

                                
                                 {{-- <input type="hidden" class="deleteChef" value="{{$item->id}}">
                                    <button type="submit" class="btn btn-fill btn-danger chefdeletebtn">Delete</button>  --}}
                                </td>
                            </tr>
                            {{-- {{route('clientEdit',$item->id)}} --}}
                            {{-- {{route('clientDelete',$item->clientDelete)}} --}}
                            
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

@section('status')

<script>
    $('input[name=toogle]').change(function() {
        var mode = $(this).prop('checked');
        var id= $(this).val();

        alert(id);
    })
</script>
    
@endsection