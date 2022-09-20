@extends('User.UserMainLayout')

@section('content')

<section class="inner-banner">
    <div class="container">
       
        <h2>Our Services</h2>
    </div><!-- /.container -->
</section><!-- /.inner-banner -->
     <section class="taxi-style-one book-ride-one">
    <div class="container">

        <ul class="nav nav-tabs tab-title" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" href="#hybrid" role="tab" data-toggle="tab">Limousine  Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#town" role="tab" data-toggle="tab">Flat Rate Taxi Services</a>
            </li>
         
       
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane show active  animated fadeInUp" id="hybrid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12">
                        <div class="limo_serv">
                         <a href="#">
                              <img src="{{asset('user-asset/images/home/airport_transfer.webp')}}" class="img-fluid">
                         </a>
                         <div class="limo_service_btn">
                             <a href="#">Airport Transfer</a>
                         </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12">
                        <div class="limo_serv">
                         <a href="#">
                              <img src="{{asset('user-asset/images/home/1.jpg')}}" class="img-fluid">
                         </a>
                         <div class="limo_service_btn">
                             <a href="#">Corporate</a>
                         </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12">
                        <div class="limo_serv">
                         <a href="#">
                              <img src="{{asset('user-asset/images/home/wine.jpg')}}" class="img-fluid">
                         </a>
                         <div class="limo_service_btn">
                             <a href="#">Wine Tour</a>
                         </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12">
                        <div class="limo_serv">
                         <a href="#">
                              <img src="{{asset('user-asset/images/home/wedding.jpg')}}" class="img-fluid">
                         </a>
                         <div class="limo_service_btn">
                             <a href="#">Wedding</a>
                         </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12">
                        <div class="limo_serv">
                         <a href="#">
                              <img src="{{asset('user-asset/images/home/prom.jpg')}}" class="img-fluid">
                         </a>
                         <div class="limo_service_btn">
                             <a href="#">Prom</a>
                         </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12">
                        <div class="limo_serv">
                         <a href="#">
                              <img src="{{asset('user-asset/images/home/event.jpg')}}" class="img-fluid">
                         </a>
                         <div class="limo_service_btn">
                             <a href="#">Any Private Event</a>
                         </div>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane animated fadeInUp" id="town">
                <div class="row">
                           <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12">
                        <div class="limo_serv">
                         <a href="#">
                              <img src="{{asset('user-asset/images/home/child.jfif')}}" class="img-fluid">
                         </a>
                         <div class="limo_service_btn">
                             <a href="#">Child Seat</a>
                         </div>
                        </div>
                    </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12">
                        <div class="limo_serv">
                         <a href="#">
                              <img src="{{asset('user-asset/images/home/minivan.jpg')}}" class="img-fluid">
                         </a>
                         <div class="limo_service_btn">
                             <a href="#">Minivans</a>
                         </div>
                        </div>
                    </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12">
                        <div class="limo_serv">
                         <a href="#">
                              <img src="{{asset('user-asset/images/home/tour.jpg')}}" class="img-fluid">
                         </a>
                         <div class="limo_service_btn">
                             <a href="#">Tours</a>
                         </div>
                        </div>
                    </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12">
                        <div class="limo_serv">
                         <a href="#">
                              <img src="{{asset('user-asset/images/home/air.jpg')}}" class="img-fluid">
                         </a>
                         <div class="limo_service_btn">
                             <a href="#">Airports</a>
                         </div>
                        </div>
                    </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12">
                        <div class="limo_serv">
                         <a href="#">
                              <img src="{{asset('user-asset/images/home/ride.jpg')}}" class="img-fluid">
                         </a>
                         <div class="limo_service_btn">
                             <a href="#">Ride to Airport</a>
                         </div>
                        </div>
                    </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12">
                        <div class="limo_serv">
                         <a href="#">
                              <img src="{{asset('user-asset/images/home/from_air.jpg')}}" class="img-fluid">
                         </a>
                         <div class="limo_service_btn">
                             <a href="#">Pick Up from Airport</a>
                         </div>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div>
        </div><!-- /.tab-content -->
    </div><!-- /.container -->
</section><!-- /.taxi-style-one -->





@endsection