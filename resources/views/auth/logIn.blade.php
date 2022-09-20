@extends('User.UserMainLayout')


@section('content')
    
<section class="single-blog-details-page book-ride-one">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
              
                <div class="reply-comment-block">
                    <div class="block-title">
                        <h2>Login</h2>
                    </div><!-- /.block-title -->
                    @if($errors->any())
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                @endif
                    <form method="POST" action="{{ route('login') }}" class="contact-form-one row">
                        @csrf

                        <div class="col-lg-12">
                            <div class="input-holder">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email">
                                {{-- @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div><!-- /.input-holder -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-12">
                            <div class="input-holder">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div><!-- /.input-holder -->
                        </div><!-- /.col-lg-6 -->
                            <div class="col-lg-12">
                            <div class="input-holder">
                               <p class="frgot-pwd"><a href="#">Forgot password?</a></p>
                            </div><!-- /.input-holder -->
                        </div><!-- /.col-lg-6 -->
                     
                        <div class="col-lg-12">
                            <div class="input-holder">
                                <button type="submit">Login </button>
                            </div><!-- /.input-holder -->
                        </div><!-- /.col-lg-6 -->
                        
                         <div class="col-lg-12">
                            <div class="input-holder">
                               <p class="frgot-pwd">Don't have an account?<a data-fancybox="" href="{{ route('register') }}"> Register Now</a></p>
                            </div><!-- /.input-holder -->
                        </div><!-- /.col-lg-6 -->
                        
                    </form><!-- /.contact-form-one -->
                </div><!-- /.reply-comment-block -->
            </div><!-- /.col-lg-8 -->
         
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.single-blog-details-page -->

@endsection