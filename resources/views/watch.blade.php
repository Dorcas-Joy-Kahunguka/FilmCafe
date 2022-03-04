<!DOCTYPE html>
<html lang="en" class="no-js">

<!-- moviesingle07:38-->

<head>

    <!-- Basic need -->
    <title>OnlyFilm | Watch</title>

    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="profile" href="#">

    <!--Google Font-->
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />

    <!-- Mobile specific meta -->
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone-no">

    <!-- CSS files -->
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}" />

</head>

<body class="watch-page">

    <!--preloading-->
    <div id="preloader">
        <img class="logo" src="{{ asset('images/logo1.png') }}" alt="" width="119" height="58">
        <div id="status">
            <span></span>
            <span></span>
        </div>
    </div>
    <!--end of preloading-->

    <!--login form popup-->
    <div class="login-wrapper" id="login-content">

        <div class="login-content">

            <a href="#" class="close">x</a>
            <h3>Login</h3>

            <form method="POST" action="{{ route('login') }}">

                @csrf

                <div class="row">

                    <label for="email">
                        Email:
                        <input type="text" name="email" id="email" placeholder="hugh@jackman.com"
                            value="{{old('email')}}" required />
                    </label>

                    @error('email')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror

                </div>

                <div class="row">

                    <label for="password">
                        Password:
                        <input type="password" name="password" id="password" placeholder="******" required />
                    </label>

                    @error('password')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror

                </div>

                <div class="row">
                    <div class="remember">
                        <div>
                            <input type="checkbox" name="remember" value="Remember me"><span>Remember me</span>
                        </div>
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                            Forget password ?
                        </a>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <button type="submit">Login</button>
                </div>

            </form>

            <div class="row">
                <p>Or via social</p>
                <div class="social-btn-2">
                    <a class="fb" href="#"><i class="ion-social-facebook"></i>Facebook</a>
                    <a class="tw" href="#"><i class="ion-social-twitter"></i>twitter</a>
                </div>
            </div>

        </div>

    </div>
    <!--end of login form popup-->

    <!--signup form popup-->
    <div class="login-wrapper" id="signup-content">

        <div class="login-content">

            <a href="#" class="close">x</a>

            <h3>sign up</h3>

            <form method="POST" action="{{ route('register') }}">

                @csrf

                <!-- Username -->
                <div class="row">

                    <label for="username-2">
                        Username:
                        <input type="text" name="username_signup" id="username-2" placeholder="Hugh Jackman"
                            value="{{old('username_signup')}}" required />
                    </label>

                    @error('username_signup')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror

                </div>

                <!-- Email Address -->
                <div class="row">

                    <label for="email-2">
                        your email:
                        <input type="email" name="email_signup" id="email-2" placeholder=""
                            value="{{old('email_signup')}}" required />
                    </label>

                    @error('email_signup')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror

                </div>

                <!-- Password -->
                <div class="row">

                    <label for="password-2">
                        Password:
                        <input type="password" name="password_signup" id="password-2" required />
                    </label>

                    @error('password_signup')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror

                </div>

                <!-- Confirm Password -->
                <div class="row">

                    <label for="repassword-2">
                        re-type Password:
                        <input type="password" name="password_confirmation" id="repassword-2" required />
                    </label>

                    @error('password_confirmation')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror

                </div>

                <div class="row">
                    <button type="submit">sign up</button>
                </div>

            </form>

        </div>

    </div>
    <!--end of signup form popup-->

    <!-- BEGIN | Header -->
    <header class="ht-header watch-header">

        <div class="container">

            <nav class="navbar navbar-default navbar-custom">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header logo">

                    <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <div id="nav-icon1">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <a class="logo-txt" href="{{ url('/') }}">ONLY<span>fiLM</span></a>

                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav flex-child-menu menu-left">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav flex-child-menu menu-right">

                        @if(auth()->user())
                        <li class=""><a href="#">Signed in as <?php echo auth()->user()->name ?></a></li>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <li class=""><button class="button normal-btn" type="submit">Log Out</button></li>
                        </form>
                        @else
                        <li class="loginLink"><a href="#">LOG In</a></li>
                        <li class="btn signupLink" id="signupLink"><a href="#">sign up</a></li>
                        @endif

                    </ul>

                </div>
                <!-- /.navbar-collapse -->

            </nav>

        </div>

    </header>
    <!-- END | Header -->

    <div class="watch-hero">

        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <video src="{{$film->file_path}}" style="width: 100%;" autoplay controls
                        controlsList="nodownload"></video>
                </div>
            </div>

            <div class="row watch-text">

                <div class="col-md-8">
                    <h6 class="watch-title" data-id="{{$film->id}}">{{$film->title}}</h6>
                    <p>{{$film->description}}</p>
                </div>
                <div class="col-md-4">
                    <div class="movie-rate">

                        <div class="rate">
                            <h6 class="rating-value">{{$film->rating}}/10<h6>
                                    <p class="reviews-value">{{$film->ratings}} Reviews</p>
                        </div>

                        <div class="rate-star">
                            <p>Rate This Movie: </p>
                            <i data-value="1" class="s-rating-star rating-star ion-ios-star-outline"></i>
                            <i data-value="2" class="s-rating-star rating-star ion-ios-star-outline"></i>
                            <i data-value="3" class="s-rating-star rating-star ion-ios-star-outline"></i>
                            <i data-value="4" class="s-rating-star rating-star ion-ios-star-outline"></i>
                            <i data-value="5" class="s-rating-star rating-star ion-ios-star-outline"></i>
                            <i data-value="6" class="s-rating-star rating-star ion-ios-star-outline"></i>
                            <i data-value="7" class="s-rating-star rating-star ion-ios-star-outline"></i>
                            <i data-value="8" class="s-rating-star rating-star ion-ios-star-outline"></i>
                            <i data-value="9" class="s-rating-star rating-star ion-ios-star-outline"></i>
                            <i data-value="10" class="s-rating-star rating-star ion-ios-star-outline"></i>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- end of footer section-->

    <script src="{{ URL::asset('js/jquery.js') }}"></script>
    <script src="{{ URL::asset('js/plugins.js') }}"></script>
    <script src="{{ URL::asset('js/plugins2.js') }}"></script>
    <script src="{{ URL::asset('js/custom.js') }}"></script>

</body>

<!-- moviesingle11:03-->

</html>