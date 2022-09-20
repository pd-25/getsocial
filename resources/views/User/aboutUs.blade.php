@extends('User.UserMainLayout')

@section('content')

<section class="inner-banner">
    <div class="container">
       
        <h2>About Us</h2>
    </div><!-- /.container -->
</section><!-- /.inner-banner -->
<section class="about-style-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="content-block">
                    <div class="block-title">
                        <!-- <div class="dot-line"></div>--><!-- /.dot-line --> 
                        <p>Our Story</p>
                        <h2>Sfo Blackride</h2>
                    </div><!-- /.block-title text-center -->
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            
                </div><!-- /.content-block -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="hvr-float-shadow">
                    <div class="image-block">
                        <img src="{{asset('user-asset/images/resources/about-1-1.jpg')}}" alt="Awesome Image" />
                       <!-- /.bubble-block -->
                    </div><!-- /.image-block -->
                </div><!-- /.hvr-float-shadow -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.about-style-two -->

<section class="about-style-three book-ride-one">
   <div class="container">
      <div class="block-title text-center">
            <div class="dot-line"></div><!-- /.dot-line -->
            <h2>What we’re offering</h2>
        </div><!-- /.block-title -->
   <div class="row">
    <div class="left-block col-lg-6">
        <div class="content-block">
            <div class="image-block">
                <img src="{{asset('user-asset/images/resources/book-1-1.jpg')}}" alt="Awesome Image">
            </div><!-- /.image-block -->
            <div class="block-title">
                <div class="dot-line"></div><!-- /.dot-line -->
                <p>Sfo Blackride Limousine Service</p>
                <h2>Limousine Taxi Service</h2>
            </div><!-- /.block-title -->
            <p>Founded in the Year 2014 and with 8 plus years
              of experience in this sector.</p>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
           
        
        </div><!-- /.content-block -->
    </div><!-- /.left-block -->
       <div class="left-block col-lg-6">
        <div class="content-block">
            <div class="image-block">
                <img src="{{asset('user-asset/images/resources/offer-1-3.jpg')}}" alt="Awesome Image">
            </div><!-- /.image-block -->
            <div class="block-title">
                <div class="dot-line"></div><!-- /.dot-line -->
                <p>Sfo Blackride Flat Rate Taxi Service</p>
                <h2>Flat Rate Taxi Service</h2>
            </div><!-- /.block-title -->
            <p>Founded in the Year 2014 and with 8 plus years
         of experience in this sector.</p>
         <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
         
        
        </div><!-- /.content-block -->
    </div><!-- /.left-block -->

    </div></div>
</section>
<section class="taxi-fare-one book-ride-one">
    <div class="container">
        <div class="block-title text-center">
            <div class="dot-line"></div><!-- /.dot-line -->
            <h2>Our Core Values</h2>
        </div><!-- /.block-title -->
        <div class="row">
            <div class="col-lg-6">
                <div class="single-taxi-fare-one thm-base-bg hvr-float-shadow">
                    <div class="top-block">
                        <div class="icon-block">
                         <i class="fa fa-bullseye" aria-hidden="true"></i>

                        </div><!-- /.icon-block -->
                        <div class="text-block">
                            <h3>Our Mission</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div><!-- /.text-block -->
                    </div><!-- /.top-block -->
                 
                </div><!-- /.single-taxi-fare-one -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="single-taxi-fare-one thm-base-bg hvr-float-shadow">
                    <div class="top-block">
                        <div class="icon-block">
                           <i class="fa fa-eye" aria-hidden="true"></i>

                        </div><!-- /.icon-block -->
                        <div class="text-block">
                            <h3>Our Vision</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                        </div><!-- /.text-block -->
                    </div><!-- /.top-block -->
                 
                </div><!-- /.single-taxi-fare-one -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="block-text text-center">
             <p>Client satisfaction , affordability and reliabity along with services options are the values<br> we deliver when we provide ride to the customer.</p>
        </div><!-- /.block-text -->
    </div><!-- /.container -->
</section>



@endsection