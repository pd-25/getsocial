@extends('User.UserMainLayout')

@section('content')

<section class="inner-banner">
    <div class="container">
    
        <h2>Our Faq</h2>
    </div><!-- /.container -->
</section><!-- /.inner-banner -->

<section class="single-taxi-faq-one ">
    <div class="container">
        <div class="block-title text-center">
            <div class="dot-line"></div><!-- /.dot-line -->
            <p>Our faq</p>
            <h2>Questions &amp; answers</h2>
        </div><!-- /.block-title -->
        <div class="accrodion-grp faq-accrodion" data-grp-name="faq-accrodion">
            <div class="accrodion active">
                <div class="accrodion-title">
                    <h4>Can i make advance payment to book taxi?</h4>
                </div>
                <div class="accrodion-content" style="display: block;">
                    <div class="inner">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
                    </div><!-- /.inner -->
                </div>
            </div>
            <div class="accrodion ">
                <div class="accrodion-title">
                    <h4>How much luxury taxi rates per minute?</h4>
                </div>
                <div class="accrodion-content" style="display: none;">
                    <div class="inner">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
                    </div><!-- /.inner -->
                </div>
            </div>
            <div class="accrodion">
                <div class="accrodion-title">
                    <h4>Is there any surcharge for mercedez benz?</h4>
                </div>
                <div class="accrodion-content" style="display: none;">
                    <div class="inner">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
                    </div><!-- /.inner -->
                </div>
            </div>
            <div class="accrodion">
                <div class="accrodion-title">
                    <h4>How much you charge for one hour wait?</h4>
                </div>
                <div class="accrodion-content" style="display: none;">
                    <div class="inner">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
                    </div><!-- /.inner -->
                </div>
            </div>
        </div>
        
        
    </div><!-- /.container -->
</section>
 <section class="single-blog-details-page book-ride-one">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
              
                <div class="reply-comment-block">
                    <div class="block-title">
                        <h2>Have A Question To Ask ?</h2>
                    </div><!-- /.block-title -->
                    <form action="http://ashik.templatepath.net/conexi-preview-files/inc/sendemail.php" class="contact-form-one row">
                        <div class="col-lg-6">
                            <div class="input-holder">
                                <input type="text" name="name" placeholder="Your name">
                            </div><!-- /.input-holder -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <div class="input-holder">
                                <input type="text" name="name" placeholder="Email address">
                            </div><!-- /.input-holder -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-12">
                            <div class="input-holder">
                                <textarea name="message" placeholder="Your Question"></textarea>
                            </div><!-- /.input-holder -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-12">
                            <div class="input-holder">
                                <button type="submit">Submit </button>
                            </div><!-- /.input-holder -->
                        </div><!-- /.col-lg-6 -->
                    </form><!-- /.contact-form-one -->
                </div><!-- /.reply-comment-block -->
            </div><!-- /.col-lg-8 -->
         
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.single-blog-details-page -->




@endsection