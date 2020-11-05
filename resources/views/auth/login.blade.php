@extends('layouts.pridate')

@section('content')

<body class="sign-in" oncontextmenu="return true;">


    <div class="wrapper">

        <div class="sign-in-page">
            <div class="signin-popup">
                <div class="signin-pop">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="cmp-info">
                                <div class="cm-logo">
                                    <img src="{{asset('/svg/logo.png')}}" alt="">
                                    <p>{{trans('auth.login_info')}}</p>
                                </div><!--cm-logo end-->
                                <img src="{{asset('/svg/banner.jpg')}}" alt="">
                            </div><!--cmp-info end-->
                        </div>
                        <div class="col-lg-6">
                            <div class="login-sec">
                                <ul class="sign-control">
                                    <li data-tab="tab-1" class="current"><a href="#" title="">{{ __('auth.Login') }}</a></li>
                                    <li data-tab="tab-2"><a href="#" title="">{{ __('auth.Register') }}</a></li>
                                </ul>
                                <div class="sign_in_sec current" id="tab-1">

                                    <h3>{{ __('auth.Login') }}</h3>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    {{-- <input type="text" name="username" placeholder="Username"> --}}
                                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                    <i class="la la-user"></i>
                                                    {{-- @if ($errors->has('email'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif --}}




                                                </div><!--sn-field end-->
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    {{-- <input type="password" name="password" placeholder="Password"> --}}

                                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="current-password">
                                                    <i class="la la-lock"></i>
                                                    @if ($errors->has('password'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="checky-sec">
                                                    <div class="fgt-sec">
                                                        <input type="checkbox" name="remember" id="c1">
                                                        <label for="c1">
                                                            <span></span>
                                                        </label>
                                                        <label for="c1" style="margin-top: -2px; margin-left: 10px;"> {{__('auth.Remember me')}}</label>


                                                    </div><!--fgt-sec end-->
                                                    {{-- <a href="#" title="">Forgot Password?</a> --}}
                                                    @if (Route::has('password.request'))
                                                    <a class="btn btn-link" style="margin-top: -10px;" href="{{ route('password.request') }}">
                                                        {{ __('auth.Forgot Password?') }}
                                                    </a>
                                                    @endif

                                                </div>


                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                {{-- <button type="submit" value="submit"> {{ __('Sign In') }}</button> --}}

                                                    <div class="col-md-8 offset-md-0">
                                                        <button type="submit" class="btn btn-primary">
                                                            {{ __('auth.Login') }}
                                                        </button>
                                                    </div>


                                            </div>



                                        </div>
                                    </form>
                                    <div class="login-resources">
                                        <h4>Login Via Social Account</h4>
                                        <ul>
                                            <li><a href="#" title="" class="fb"><i class="fa fa-facebook"></i>Login Via Facebook</a></li>
                                            <li><a href="#" title="" class="tw"><i class="fa fa-twitter"></i>Login Via Twitter</a></li>
                                        </ul>
                                    </div><!--login-resources end-->
                                </div><!--sign_in_sec end-->
                                <div class="sign_in_sec" id="tab-2">
                                    {{-- <div class="signup-tab">
                                        <i class="fa fa-long-arrow-left"></i>
                                        <h2>johndoe@example.com</h2>
                                        <ul>
                                            <li data-tab="tab-3" class="current"><a href="#" title="">User</a></li>
                                            <li data-tab="tab-4"><a href="#" title="">Company</a></li>
                                        </ul>
                                    </div><!--signup-tab end--> --}}
                                    <div class="dff-tab current" id="tab-3">
                                        <h3>{{ __('auth.Register') }}</h3>
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">
                                                        {{-- <input type="text" name="name" placeholder="Full Name"> --}}
                                                        <i class="la la-user"></i>
                                                        <input id="name" type="text"  placeholder="Full Name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                                                        @if ($errors->has('name'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('name') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">
                                                        {{-- <input type="text" name="country" placeholder="Country"> --}}
                                                        <i class="la la-globe"></i>
                                                        <input id="email" type="email" placeholder="yourmail@gmail.com" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" autocomplete="email">

                                                        @if ($errors->has('email'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">
                                                        {{-- <input type="text" name="country" placeholder="Country"> --}}
                                                        <i class="la la-user"></i>
                                                        <input id="username" type="username" placeholder="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" autocomplete="username">

                                                        @if ($errors->has('username'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('username') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                {{-- <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">
                                                        <select>
                                                            <option>Category</option>
                                                            <option>Category 1</option>
                                                            <option>Category 2</option>
                                                            <option>Category 3</option>
                                                            <option>Category 4</option>
                                                        </select>
                                                        <i class="la la-dropbox"></i>
                                                        <span><i class="fa fa-ellipsis-h"></i></span>
                                                    </div>
                                                </div> --}}
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">
                                                        {{-- <input type="password" name="password" placeholder="Password"> --}}
                                                        <i class="la la-lock"></i>
                                                        <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" autocomplete="new-password">

                                                        @if ($errors->has('password'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">
                                                        {{-- <input type="password" name="repeat-password" placeholder="Repeat Password"> --}}
                                                        <i class="la la-lock"></i>
                                                        <input id="password-confirm" type="password" placeholder="Repeat Password" class="form-control" name="password_confirmation" autocomplete="new-password">

                                                    </div>
                                                </div>
                                                {{-- <div class="col-lg-12 no-pdd">
                                                    <div class="checky-sec st2">
                                                        <div class="fgt-sec">
                                                            <input type="checkbox" name="cc" id="c2">
                                                            <label for="c2">
                                                                <span></span>
                                                            </label>
                                                            <small>Yes, I understand and agree to the workwise Terms & Conditions.</small>
                                                        </div><!--fgt-sec end-->
                                                    </div>
                                                </div> --}}
                                                <div class="col-lg-12 no-pdd">
                                                    {{-- <button type="submit" value="submit">Get Started</button> --}}
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('auth.Get_Started') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div><!--dff-tab end-->

                                    {{-- <div class="dff-tab" id="tab-4">
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">
                                                        <input type="text" name="company-name" placeholder="Company Name">
                                                        <i class="la la-building"></i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">
                                                        <input type="text" name="country" placeholder="Country">
                                                        <i class="la la-globe"></i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">
                                                        <input type="password" name="password" placeholder="Password">
                                                        <i class="la la-lock"></i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">
                                                        <input type="password" name="repeat-password" placeholder="Repeat Password">
                                                        <i class="la la-lock"></i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="checky-sec st2">
                                                        <div class="fgt-sec">
                                                            <input type="checkbox" name="cc" id="c3">
                                                            <label for="c3">
                                                                <span></span>
                                                            </label>
                                                            <small>Yes, I understand and agree to the workwise Terms & Conditions.</small>
                                                        </div><!--fgt-sec end-->
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <button type="submit" value="submit">Get Started</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div><!--dff-tab end--> --}}


                                </div>
                            </div><!--login-sec end-->
                        </div>
                    </div>
                </div><!--signin-pop end-->
            </div><!--signin-popup end-->
            <div class="footy-sec">
                <div class="container">
                    <ul class="offset-md-4">
                        <li><a href="{{ url('locale/en') }}" ><i class="fa fa-language"></i> English</a></li>
                        <li><a href="{{ url('locale/kh') }}" ><i class="fa fa-language"></i> ភាសា​ខ្មែរ</a></li>
                        <li><a href="#" title="">ภาษาไทย</a></li>
                        <li><a href="#" title="">Français (France)</a></li>




                    </ul>

                    <ul>
                        <li><a href="help-center.html" title="">Help Center</a></li>
                        <li><a href="about.html" title="">About</a></li>
                        <li><a href="#" title="">Privacy Policy</a></li>
                        <li><a href="#" title="">Community Guidelines</a></li>
                        <li><a href="#" title="">Cookies Policy</a></li>
                        <li><a href="#" title="">Career</a></li>
                        <li><a href="#" title="">Forum</a></li>
                        <li><a href="#" title="">Language</a></li>
                        <li><a href="#" title="">Copyright Policy</a></li>
                    </ul>
                    <p><img src="images/copy-icon.png" alt="">Copyright 2019</p>
                </div>
            </div><!--footy-sec end-->
        </div><!--sign-in-page end-->


    </div><!--theme-layout end-->


@endsection
