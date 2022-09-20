@extends('User.UserMainLayout')

@section('content')

<section class="inner-banner">
    <div class="container">
    
        <h2>Contact Us</h2>
    </div><!-- /.container -->
</section><!-- /.inner-banner -->

   <div class="contact-page-map-wrapper">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3163.7686491356703!2d-121.96191228551984!3d37.536950533581226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fc0cfcc86212d%3A0xded00f6555283feb!2s40530%20Chapel%20Way%20%231%2C%20Fremont%2C%20CA%2094538%2C%20USA!5e0!3m2!1sen!2sin!4v1663181829431!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div class="contact-info-block">
        <p>40530 Chapel Way #1 , Fremont, CA 94538</p>
        <ul class="contact-infos">
            <li><i class="fa fa-envelope"></i> sfoblackride@gmail.com </li>
            <li><i class="fa fa-phone-square"></i> +15109460001</li>
        </ul><!-- /.contact-infos -->
    </div><!-- /.contact-info-block -->
</div><!-- /.contact-page-map-wrapper -->
<section class="contact-form-style-one book-ride-one">
    <div class="container">
        <div class="block-title text-center">
            <div class="dot-line"></div><!-- /.dot-line -->
            <p>Contact with us now</p>
            <h2>Leave a message</h2>
        </div><!-- /.block-title -->
        <form action="http://ashik.templatepath.net/conexi-preview-files/inc/sendmail.php" class="contact-form-one row" id="contact-form" method="post" novalidate="novalidate">
            <div class="col-lg-6">
                <div class="input-holder">
                    <input class="form-control" type="text" name="form_name" placeholder="Your name">
                </div><!-- /.input-holder -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="input-holder">
                    <input class="form-control" type="email" name="form_email" placeholder="Email address">
                </div><!-- /.input-holder -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="input-holder">
                    <input class="form-control" type="text" name="form_phone" placeholder="Phone">
                </div><!-- /.input-holder -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="input-holder">
                    <input class="form-control" type="text" name="form_subject" placeholder="Subject">
                </div><!-- /.input-holder -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-12">
                <div class="input-holder">
                    <textarea class="form-control" name="form_message" placeholder="Write message"></textarea>
                </div><!-- /.input-holder -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-12">
                <div class="input-holder text-center">
                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                    <button class="theme-btn btn-style-two" type="submit" data-loading-text="Please wait..."><span>Send Message</span></button>
                </div><!-- /.input-holder -->
            </div><!-- /.col-lg-6 -->
        </form><!-- /.contact-form-one -->
    </div><!-- /.container -->
</section>




@endsection