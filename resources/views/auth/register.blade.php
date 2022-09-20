
@extends('User.UserMainLayout')


@section('content')

<section class="single-blog-details-page book-ride-one">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
              
                <div class="reply-comment-block">
                    <div class="block-title">
                        <h2>Register</h2>
                    </div><!-- /.block-title -->
                    <form class="contact-form-one row" method="POST" action="{{ route('register') }}">
                    @csrf
                        <div class="col-lg-12">
                            <div class="input-holder">
                                <input type="text"  class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required   placeholder="Name">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div><!-- /.input-holder -->
                           
                        </div><!-- /.col-lg-6 -->
                        
                         <div class="col-lg-12">
                            <div class="input-holder">
                                <input type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required   placeholder="Phone">
                                @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            </div><!-- /.input-holder -->
                            
                        </div><!-- /.col-lg-6 -->
                         <div class="col-lg-12">
                            <div class="input-holder">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required  placeholder="Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div><!-- /.input-holder -->
                            
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-12">
                            <div class="input-holder">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required  placeholder="Password">
                                @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                            </div><!-- /.input-holder -->
                            
                        </div><!-- /.col-lg-6 -->
                     
                        <div class="col-lg-12">
                            <div class="input-holder">
                                <button name="submit" type="submit">Register </button>
                            </div><!-- /.input-holder -->
                        </div><!-- /.col-lg-6 -->
                        
                         <div class="col-lg-12">
                            <div class="input-holder">
                               <p class="frgot-pwd">Already have an account?<a data-fancybox="" href="{{ route('login') }}"> Login</a></p>
                            </div><!-- /.input-holder -->
                        </div><!-- /.col-lg-6 -->
                        
                    </form><!-- /.contact-form-one -->
                </div><!-- /.reply-comment-block -->
            </div><!-- /.col-lg-8 -->
         
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.single-blog-details-page -->
    
@endsection