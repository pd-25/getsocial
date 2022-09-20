


@extends('User.UserMainLayout')


@section('content')

<section class="single-blog-details-page book-ride-one">
    <div class="container">
        <div class="row">
        
             <div class="col-lg-3">
                <div class="sidebar">
                    <div class="single-sidebar latest-post-widget">
                        <div class="widget-title">
                            <h3>DASHBOARD</h3>
                        </div><!-- /.widget-title -->
                         <div class="post-wrapper">
                            <div class="single-latest-post">
                                <div class="text-block">
                                    <h3><a href="{{route('userUashboard')}}"><i class="fa fa-user" aria-hidden="true"></i> My Profile</a></h3>
                                </div><!-- /.text-block -->
                            </div><!-- /.single-latest-post -->
                            <div class="single-latest-post">
                                <div class="text-block">
                                    <h3><a href="{{route('changePassword')}}"><i class="fa fa-key"></i> Change Password</a></h3>
                                </div><!-- /.text-block -->
                            </div><!-- /.single-latest-post -->
                            <div class="single-latest-post">
                                <div class="text-block">
                                    <h3><a href="{{route('bookinghistory')}}"><i class="fa fa-history" aria-hidden="true"></i>
                                   Booking History</a></h3>
                                </div><!-- /.text-block -->
                            </div><!-- /.single-latest-post -->
                             <div class="single-latest-post">
                                <div class="text-block">

                                    
                                        
                                    

                                    <h3><i class="fa fa-lock" aria-hidden="true"></i><a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                          Log Out
                                         </a>
 
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                         @csrf
                                     </form>
                                  </h3>
                                </div><!-- /.text-block -->
                            </div><!-- /.single-latest-post -->
                        </div><!-- /.post-wrapper -->
                    </div><!-- /.single-sidebar author-widget -->
                
                </div><!-- /.sidebar -->
            </div><!-- /.col-lg-4 -->
        
        
            <div class="col-lg-9">
                <div class="block-title">
                            <h2>Change Password</h2>
                        </div>
                   <div class="row align-items-center">
                            <form class="row m-0">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="small text-dark ft-medium">Current Password *</label>
                                        <input type="password" class="form-control" value="555555555">
                                    </div>
                                </div>
                                
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="small text-dark ft-medium">New Password *</label>
                                        <input type="password" class="form-control" value="New Password">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="small text-dark ft-medium">Confirm New Password *</label>
                                        <input type="password" class="form-control" value="New Password">
                                    </div>
                                </div>
                                
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-dark">Save Changes</button>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                </div><!-- /.col-lg-8 -->
       
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

    
@endsection
