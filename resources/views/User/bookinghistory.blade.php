


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
                            <h2>Booking History</h2>
                        </div>
                 <table class="table table-responsive">
               <thead>
               <tr>
               <th>Order Id</th>
               <th>Pickup Point</th>
               <th>Drop off point</th>
               <th>Vehicle</th>
               <th>Amount</th>
               <th>Status</th>
               <th></th>
                </tr>
              </thead>
<tbody>
  <tr>
    <td>MSINKM<br>2022-06-23<br>10:16:56</td>
    <td>Chapel Way<br>CA </td>
    <td>Dummy Way<br>CA</td>
    <td>BMW1 Series 1351</td>
    <td>$20.03</td>
    <td class="success">Success</td>
    <td><button type="button" class="btn btn-dark bg-green">View</button></td>
  </tr>
   <tr>
    <td>MSINKM<br>2022-06-23<br>10:16:56</td>
    <td>Chapel Way<br>CA </td>
    <td>Dummy Way<br>CA</td>
    <td>BMW1 Series 1351</td>
    <td>$19.00</td>
    <td class="pending">Pending</td>
    <td><button type="button" class="btn btn-dark bg-green">View</button></td>
  </tr>
  <tr>
    <td>MSINKM<br>2022-06-23<br>10:16:56</td>
    <td>Chapel Way<br>CA </td>
    <td>Dummy Way<br>CA</td>
    <td>BMW1 Series 1351</td>
    <td>$22.15</td>
    <td class="success">Success</td>
    <td><button type="button" class="btn btn-dark bg-green">View</button></td>
  </tr>
</tbody>
</table>
                </div><!-- /.col-lg-8 -->
       
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

    
@endsection
