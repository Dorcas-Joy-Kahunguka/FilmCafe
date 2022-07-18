<!DOCTYPE html>
<html lang="en" class="no-js">

<!-- moviegridfw07:38-->

<head>

    <!-- Basic need -->
    <title>FilmCafe | Library</title>

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
    .pagination {
        margin-top: 10px;
        margin-bottom: 10px;
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

    <div class="hero common-hero">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-ct">
                        <h1>Library</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-single">

        <div class="container">

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">

                    <div class="topbar-filter fw">
                        <p>Found <span>{{$film_count}}</span> in total</p>
                        <!-- <label>Sort by:</label>
                        <select>
                            <option value="popularity">Popularity Descending</option>
                            <option value="popularity">Popularity Ascending</option>
                            <option value="rating">Rating Descending</option>
                            <option value="rating">Rating Ascending</option>
                            <option value="date">Release date Descending</option>
                            <option value="date">Release date Ascending</option>
                        </select> -->
                        <!-- <a href="#" class="list"><i class="ion-ios-list-outline "></i></a> -->
                        <a title="Show all" href="{{ route('home') }}" class="grid"><i class="ion-grid active"></i></a>
                    </div>

                    <div class="flex-wrap-movielist mv-grid-fw">

                        @if(isset($films))
                        @foreach ($films as $film)
                        <div class="movie-item-style-2 movie-item-style-1">

                            <!-- <img src="{{ asset('images/uploads/mv1.jpg') }}" alt=""> -->
                            <img src="{{$film->thumbnail_path}}" alt="">

                            <div class="hvr-inner">
                                <a href="{{ route('movie_single', ['film' => $film] ) }}">
                                    Read more<i class="ion-android-arrow-dropright"></i>
                                </a>
                            </div>

                            <div class="mv-item-infor">
                                <h6><a href="{{ route('movie_single', ['film' => $film] ) }}">{{$film->title}}</a></h6>
                                <p class="rate">
                                    <!-- <i class="ion-android-star"></i> -->
                                    <span>{{$film->rating}}</span> /10
                                </p>
                            </div>
                        </div>
                        @endforeach
                        @endif


                    </div>

                    <div class="topbar-filter">
                        <label>
                            @if($films->hasPages())
                            Current page: <b>{{$films->currentPage()}}</b>
                            @else
                            No more pages
                            @endif
                        </label>
                        <!-- <select>
                            <option value="range">20 Movies</option>
                            <option value="saab">10 Movies</option>
                        </select> -->

                        <div class="pagination2">
                            <!-- <span>Page 1 of 2:</span>
                            <a class="active" href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">...</a>
                            <a href="#">78</a>
                            <a href="#">79</a>
                            <a href="#"><i class="ion-arrow-right-b"></i></a> -->
                            {!! $films->links() !!}
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
    <!-- footer section-->

    <!-- end of footer section-->

    <script src="{{ URL::asset('js/jquery.js') }}"></script>
    <script src="{{ URL::asset('js/plugins.js') }}"></script>
    <script src="{{ URL::asset('js/plugins2.js') }}"></script>
    <script src="{{ URL::asset('js/custom.js') }}"></script>

</body>

<!-- moviegridfw07:38-->

</html>