@extends('layouts.loginlayout')

@section('content')
               

<section class="myform-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-area login-form">
                            
                            <div class="form-leftcontent">
                                <div class="form-content">
                               
                                <p>
                                <img src="{{ URL('/images/Kerala-Police-Academy-Logo.png') }}" alt="" width="100%" height="100%">
                                </p>
                                <ul>
                                    
                                </ul>
                            </div>
                            </div>
                            <div class="form-input">
                                <h2>Login Form</h2>
                                <form>
                                    <div class="form-group">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                                    </div>
                                    <div class="form-group">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                     <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                                    </div>
                                    
                                    <div class="myform-button">
                                   
                                        <button type="submit" class="myform-btn">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                    
                                    <div>
                                    <div class="myform-button">
                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                        @endif
                                        
                                        <div style="float:right">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                       </div>
                                    </div>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </section>


@endsection
