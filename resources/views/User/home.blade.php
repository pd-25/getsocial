@extends('User.UserMainLayout')

@section('content')

<section class="banner_section" style="background-image: url('{{asset('user-asset/images/home/4.jpg')}}');">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12">
              <div class="limosine_taxi" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                   <div class="content-block">
                     <div class="block-title mb-0">
                        <!-- /.dot-line -->
                         <p class="light">Sfo Blackride Limousine Service</p>
                         <h2 class="light">Limousine Taxi booking</h2>
                     </div><!-- /.block-title -->
                     <p class="text-white">Founded in the Year 2014 and with 8 plus years<br> of experience in this sector</p>

                     <div class="limo_btn">
                         <a href="#">Book Now</a>
                     </div>
                 </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12">
                <div class="limosine_taxi" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                   <div class="content-block">
                     <div class="block-title mb-0">
                         <!-- /.dot-line -->
                         <p class="light">Sfo Blackride Flat Rate Taxi Service</p>
                         <h2 class="light">Flat Rate Taxi booking</h2>
                     </div><!-- /.block-title -->
                     <p class="text-white">Founded in the Year 2014 and with 8 plus years<br> of experience in this sector</p>

                     <div class="limo_btn">
                         <a href="#">Book Now</a>
                     </div>
                 </div>
              </div>
            </div>
        </div>
    </div>
 </section>
 <section class="about-style-one ">
     <div class="container">
        <!-- /.block-title -->
         <div class="row high-gutter">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12">
                 <div class="sfo_about" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                  <div class="block-title mb-0">
             <h2>Sfo Blackride</h2>
         </div>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
             tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
             quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
             consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
             cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
             proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="limo_btn_about">
                         <a href="#">Read More</a>
                     </div>
                 </div>
             </div>
             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12">
                 <div class="img_area" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine"> 
                     <img src="{{asset('user-asset/images/home/1.jpg')}}" class="img-fluid">
                 </div>
             </div>
             <!-- /.row -->
     </div><!-- /.container -->
 </section><!-- /.about-style-one -->
<!-- /.funfact-style-one -->
 <section class="cta-style-two">
     <div class="container">
         <div class="content-block">
             <h3>Let's Get In Touch With Us Today.</h3>
         </div><!-- /.content-block -->
         <div class="button-block">
             <a href="#" class="cta-btn">Book With Us Now</a>
         </div><!-- /.button-block -->
     </div><!-- /.container -->
 </section><!-- /.cta-style-two -->
 <section class="taxi-style-one">
     <div class="container">
         <div class="block-title text-center">
             <div class="dot-line"></div><!-- /.dot-line -->
             <h2>Our Services</h2>
         </div><!-- /.block-title -->
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
 <hr class="style-one">
 <section class="feature-style-one thm-black-bg">
     <img src="{{asset('user-asset/images/background/feature-bg-1-1.png')}}" alt="Awesome Image" class="feature-bg" />
     <div class="container">
         <div class="block-title text-center">
             <div class="dot-line"></div><!-- /.dot-line -->
             <p>Sfo Black Ride benefit list</p>
             <h2 class="light">Why choose us</h2>
         </div><!-- /.block-title text-center -->
         <div class="row">
             <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12">
                 <div class="single-feature-one">
                     <div class="icon-block">
                         <i class="conexi-icon-insurance"></i>
                     </div><!-- /.icon-block -->
                     <h3><a href="#">Safety Guarantee</a></h3>
                     <p>Lorem ipsum dolor sit amet <br> cons adipisci elit vehicula est <br> non lac at quam.</p>
                     <a href="#" class="more-link">Read More</a>
                 </div><!-- /.single-feature-one -->
             </div><!-- /.col-lg-4 -->
             <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12">
                 <div class="single-feature-one">
                     <div class="icon-block">
                         <i class="conexi-icon-seatbelt"></i>
                     </div><!-- /.icon-block -->
                     <h3><a href="#">DBS Cleared Drivers</a></h3>
                     <p>Lorem ipsum dolor sit amet <br> cons adipisci elit vehicula est <br> non lac at quam.</p>
                     <a href="#" class="more-link">Read More</a>
                 </div><!-- /.single-feature-one -->
             </div><!-- /.col-lg-4 -->
             <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12">
                 <div class="single-feature-one">
                     <div class="icon-block">
                         <i class="conexi-icon-consent"></i>
                     </div><!-- /.icon-block -->
                     <h3><a href="#">Free Quotation</a></h3>
                     <p>Lorem ipsum dolor sit amet <br> cons adipisci elit vehicula est <br> non lac at quam.</p>
                     <a href="#" class="more-link">Read More</a>
                 </div><!-- /.single-feature-one -->
             </div><!-- /.col-lg-4 -->
         </div><!-- /.row -->
     </div><!-- /.container -->
 </section><!-- /.feature-style-one -->
 <section class="book-ride-one booking_contac ">
     <div class="container">
         <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
                  <div class="content-block text-center">
                     <div class="block-title mb-0">
                         <div class="dot-line"></div><!-- /.dot-line -->
                         <p>Looking for taxi?</p>
                         <h2>Let's Get In Touch </h2>
                     </div><!-- /.block-title -->
                     <p>We will be every happy to assist you and you can fill in your details below to get in touch</p>
                 </div>
             </div>
             <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-12">
               <div>
                   <img src="{{asset('user-asset/images/home/book.jpg')}}" class="img-fluid">
               </div>
             </div><!-- /.col-lg-4 -->
             <div class="col-lg-7 col-md-7 col-xs-12 col-12 col-sm-12">
                 <form action="#" class="booking-form-one">
                     <div class="row">
                         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12">
                             <div class="input-holder">
                                 <input type="text" name="name" placeholder="Your name">
                             </div><!-- /.input-holder -->
                         </div><!-- /.col-lg-6 -->
                         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12">
                             <div class="input-holder">
                                 <input type="text" name="name" placeholder="Email address">
                             </div><!-- /.input-holder -->
                         </div><!-- /.col-lg-6 -->
                         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12">
                             <div class="input-holder">
                                 <input type="tel" name="phone" placeholder="Your Phone Number">
                             </div><!-- /.input-holder -->
                         </div><!-- /.col-lg-6 -->
                         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12">
                             <div class="input-holder">
                                 <select class="selectpicker">
                                     <option>Choose Services</option>
                                     <option>Airport Transfer</option>
                                     <option>Corporate</option>
                                     <option>Wine Tour</option>
                                     <option>Wedding</option>
                                     <option>Prom</option>
                                     <option>Any Private Event</option>
                                     <option>Other</option>
                                 </select>
                             </div><!-- /.input-holder -->
                         </div>
                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
                             <div class="input-holder1">
                                 <textarea placeholder="Please Type Your Message Here....." rows="5"></textarea>
                             </div>
                         </div>
                         <!-- /.col-lg-6 -->
                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
                             <div class="input-holder text-center">
                                 <button type="submit">Send Message</button>
                             </div><!-- /.input-holder -->
                         </div><!-- /.col-lg-6 -->
                     </div><!-- /.row -->
                 </form><!-- /.booking-form-one -->
             </div><!-- /.col-lg-8 -->
         </div><!-- /.row -->
     </div><!-- /.container -->
 </section>
 <section class="testimonials-style-one">
     <div class="container">
         <div class="block-title text-center">
             <div class="dot-line"></div><!-- /.dot-line -->
             <h2 class="light">What Our Client Say</h2>
         </div><!-- /.block-title -->
         <div class="testimonials-one-pager">                    
             <a href="#" class="pager-item active" data-slide-index="1"><img src="{{asset('user-asset/images/resources/testi-1-1.jpg')}}" alt="Awesome Image" /></a>
             <a href="#" class="pager-item" data-slide-index="2"><img src="{{asset('user-asset/images/resources/testi-1-2.jpg')}}" alt="Awesome Image" /></a>
             <a href="#" class="pager-item" data-slide-index="3"><img src="{{asset('user-asset/images/resources/testi-1-3.jpg')}}" alt="Awesome Image" /></a>
         </div><!-- /.testimonials-one-pager -->
         <ul class="slider testimonials-slider-one">
             <li class="slide-item">
                 <div class="single-testimonial-one">
                     <p>This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch.</p>
                     <h3>Shana Druckman</h3>
                 </div><!-- /.single-testimonial-one -->
             </li>
             <li class="slide-item">
                 <div class="single-testimonial-one">
                     <p>This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch.</p>
                     <h3>Emanuel Mcnamara</h3>
                 </div><!-- /.single-testimonial-one -->
             </li>
             <li class="slide-item">
                 <div class="single-testimonial-one">
                     <p>This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch.</p>
                     <h3>Jodie Hadlock</h3>
                 </div><!-- /.single-testimonial-one -->
             </li>
         </ul>
     </div><!-- /.container -->            
     <div class="testimonials-one-slider-btn">
         <span class="carousel-btn left-btn"><i class="conexi-icon-left"></i></span>
         <span class="carousel-btn right-btn"><i class="conexi-icon-right"></i></span>
     </div><!-- /.carousel-btn-block banner-carousel-btn -->
 </section><!-- /.testimonials-style-one -->
 

@endsection