<!DOCTYPE html>
<html lang="en" class="no-js">

<!-- moviesingle07:38-->

<head>
    <!-- Basic need -->
    <title>FilmCafe | Movie</title>

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

    <style>
    .reviews-container {
        color: #abb7c4;
        margin-top: 20px;
        height: 500px;
        overflow-y: auto;
    }

    .reviews-container::-webkit-scrollbar {
        display: none;
    }

    .review-card {
        margin: 5px 0;
        background-color: black;
        padding: 10px 5px;
        border-radius: 3px;
    }

    .anonymous-user {
        display: flex;
        flex-flow: row nowrap;
        align-items: center;
    }

    .anonymous-user span {
        margin-left: 10px;
        font-size: 14px;
    }

    .text-box span {
        font-size: 14px;
        display: inline-block;
        margin-top: 8px;
    }

    .text-box pre {
        white-space: pre-line;
        margin: 0;
    }
    </style>

</head>

<body>

    <script type="text/javascript">
    var signup_error = '';
    var login_error = '';
    var upload_error = '';
    </script>

    @if ($errors->any())

    @if ($errors->has('username_signup') || $errors->has('email_signup') || $errors->has('password_signup') ||
    $errors->has('password_confirmation'))
    <script type="text/javascript">
    signup_error = <?php echo json_encode($errors->all()); ?>; {};
    </script>
    @endif

    @if ($errors->has('email') || $errors->has('password'))
    <script type="text/javascript">
    login_error = <?php echo json_encode($errors->all()); ?>; {};
    </script>
    @endif

    @if ($errors->has('title') || $errors->has('description') || $errors->has('genre') || $errors->has('file'))
    <script type="text/javascript">
    upload_error = <?php echo json_encode($errors->all()); ?>; {};
    </script>
    @endif

    @endif

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
                        <!-- <input type="text" name="username" id="username" placeholder="Hugh Jackman"
                            pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" /> -->
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
                        <!-- <input type="password" name="password" id="password" placeholder="******"
                            pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                            required="required" /> -->
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
                        <!-- <a href="#">Forget password ?</a> -->
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
                        <!-- <input type="text" name="username" id="username-2" placeholder="Hugh Jackman"
                            pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" /> -->
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
                        <!-- <input type="email" name="email" id="email-2" placeholder=""
                            pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                            required="required" /> -->
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
                        <!-- <input type="password" name="password" id="password-2" placeholder=""
                            pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                            required="required" /> -->
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
                        <!-- <input type="password" name="password_confirmation" id="repassword-2" placeholder=""
                            pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                            required="required" /> -->
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
    <header class="ht-header">

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
                    <!-- <a href="{{ url('/') }}">
                        <img class="logo" src="{{ asset('images/logo1.png') }}" alt="" width="119" height="58">
                    </a> -->
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
                        <li class=""><a href="{{ route('my_movies') }}">My Films</a></li>
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

            <!-- top search form -->
            <form class="search-form" method="POST" action="{{ route('home') }}">
                @csrf
                <div class="top-search">
                    <input type="text" name="search_word" placeholder="Search for a film or a TV Show">
                    <div class="speech-search">
                        <svg viewBox="0 0 24 24">
                            <g>
                                <path d="M12 3C10.34 3 9 4.37 9 6.07V11.93C9 13.63 10.34 15 12 15C13.66 15 15 13.63 15 11.93V6.07C15 4.37 13.66 3 12 3ZM18.5 12H17.5C17.5 15.03 15.03 17.5 12 17.5C8.97 17.5 6.5 15.03 6.5 12H5.5C5.5 15.24 7.89 17.93 11 18.41V21H13V18.41C16.11 17.93 18.5 15.24 18.5 12Z"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <input class="normal-btn" type="submit" value="Search">
            </form>

        </div>

    </header>
    <!-- END | Header -->

    <div class="hero mv-single-hero">

        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <!-- <h1> movie listing - list</h1>
				<ul class="breadcumb">
					<li class="active"><a href="#">Home</a></li>
					<li> <span class="ion-ios-arrow-right"></span> movie listing</li>
				</ul> -->
                </div>
            </div>

        </div>

    </div>

    <div class="page-single movie-single movie_single">

        <div class="container">

            <div class="row ipad-width2">

                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="movie-img sticky-sb">
                        <img src="{{$film->thumbnail_path}}" alt="">
                        <div class="movie-btn">
                            <div class="btn-transform transform-vertical red">
                                <div><a href="#" class="item item-1 redbtn"> <i class="ion-play"></i> Watch</a>
                                </div>
                                <div>
                                    <!-- <a href="https://www.youtube.com/embed/o-0hcF97wy0" -->
                                    <a href="{{route('watch', ['film' => $film])}}"
                                        class="item item-2 redbtn fancybox-media hvr-grow">
                                        <i class="ion-play"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="btn-transform transform-vertical">
                                <div>
                                    <!-- <a href="#" class="item item-1 yellowbtn"> <i class="ion-card"></i> Buy ticket</a> -->
                                    <!-- <a href="#" class="item item-1 yellowbtn"> <i class="ion-card"></i>
                                        <div id="paypal-button-container"></div>
                                    </a> -->
                                    <div id="smart-button-container">
                                        <div style="text-align: center;">
                                            <div id="paypal-button-container"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div><a href="#" class="item item-2 yellowbtn"><i class="ion-card"></i></a></div> -->
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-8 col-sm-12 col-xs-12">

                    <div class="movie-single-ct main-content">

                        <h1 class="bd-hd">
                            {{$film->title}}
                            <span>{{date('Y', strtotime($film->created_at))}}</span>
                        </h1>

                        <div class="movie-rate">
                            <div class="rate">
                                <p><span class="rating-value">{{$film->rating}}</span> /10<br>
                                    <span class="reviews-value">{{$film->ratings}} Ratings</span>
                                </p>
                            </div>
                            <div class="rate-star">
                                <i class="rating-star ion-ios-star-outline"></i>
                                <i class="rating-star ion-ios-star-outline"></i>
                                <i class="rating-star ion-ios-star-outline"></i>
                                <i class="rating-star ion-ios-star-outline"></i>
                                <i class="rating-star ion-ios-star-outline"></i>
                                <i class="rating-star ion-ios-star-outline"></i>
                                <i class="rating-star ion-ios-star-outline"></i>
                                <i class="rating-star ion-ios-star-outline"></i>
                                <i class="rating-star ion-ios-star-outline"></i>
                                <i class="rating-star ion-ios-star-outline"></i>
                            </div>
                        </div>

                        <div class="movie-tabs">

                            <div class="tabs">

                                <ul class="tab-links tabs-mv">
                                    <li class="active"><a href="#overview">Overview</a></li>
                                </ul>

                                <div class="tab-content">

                                    <div id="overview" class="tab active">

                                        <div class="row">

                                            <div class="col-md-12 col-sm-12 col-xs-12">

                                                <p>{{$film->description}}</p>

                                                <div class="sb-it">
                                                    <h6>Owner: </h6>
                                                    <p><a href="#">{{$owner}}</a></p>
                                                </div>

                                                <div class="sb-it">
                                                    <h6>Genres:</h6>
                                                    <p>
                                                        @foreach($tags as $tag)
                                                        <a href="#">{{$tag->tag_name}},</a>
                                                        @endforeach
                                                    </p>
                                                </div>

                                                <div class="sb-it">
                                                    <h6>Release Date:</h6>
                                                    <p>{{date('g:ia \o\n l jS F Y', strtotime($film->created_at))}}</p>
                                                </div>

                                                <div class="sb-it">

                                                    <h6>Reviews:</h6>

                                                    <div class="reviews-container">

                                                        @foreach($comments as $key => $comment)
                                                        <div class="review-card">

                                                            <div class="anonymous-user">
                                                                <svg width="35" fill="#dd003f"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 496 512">
                                                                    <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                                                    <path
                                                                        d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 96c48.6 0 88 39.4 88 88s-39.4 88-88 88-88-39.4-88-88 39.4-88 88-88zm0 344c-58.7 0-111.3-26.6-146.5-68.2 18.8-35.4 55.6-59.8 98.5-59.8 2.4 0 4.8.4 7.1 1.1 13 4.2 26.6 6.9 40.9 6.9 14.3 0 28-2.7 40.9-6.9 2.3-.7 4.7-1.1 7.1-1.1 42.9 0 79.7 24.4 98.5 59.8C359.3 421.4 306.7 448 248 448z" />
                                                                </svg>
                                                                <span>Anonymous User {{++$key}}</span>
                                                            </div>

                                                            <div class="text-box">
                                                                <span>{{date('F j,Y', strtotime($comment->created_at))}}</span>
                                                                <div class="text">
                                                                    <pre>{{$comment->text}}</pre>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        @endforeach

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <script src="{{ URL::asset('js/jquery.js') }}"></script>
    <script src="{{ URL::asset('js/plugins.js') }}"></script>
    <script src="{{ URL::asset('js/plugins2.js') }}"></script>
    <script src="{{ URL::asset('js/custom.js') }}"></script>

    <!-- PAYPAL -->
    <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD"
        data-sdk-integration-source="button-factory"></script>
    <script>
    function initPayPalButton() {
        paypal.Buttons({
            style: {
                shape: 'pill',
                color: 'black',
                layout: 'vertical',
                label: 'buynow',

            },

            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        "description": "Get this film",
                        "amount": {
                            "currency_code": "USD",
                            "value": 1110,
                            "breakdown": {
                                "item_total": {
                                    "currency_code": "USD",
                                    "value": 1000
                                },
                                "shipping": {
                                    "currency_code": "USD",
                                    "value": 10
                                },
                                "tax_total": {
                                    "currency_code": "USD",
                                    "value": 100
                                }
                            }
                        }
                    }]
                });
            },

            onApprove: function(data, actions) {
                return actions.order.capture().then(function(orderData) {

                    // Full available details
                    console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

                    // Show a success message within this page, e.g.
                    const element = document.getElementById('paypal-button-container');
                    element.innerHTML = '';
                    element.innerHTML = '<h3>Thank you for your payment!</h3>';

                    // Or go to another URL:  actions.redirect('thank_you.html');

                });
            },

            onError: function(err) {
                console.log(err);
            }
        }).render('#paypal-button-container');
    }
    initPayPalButton();
    </script>

</body>

<!-- moviesingle11:03-->

</html>