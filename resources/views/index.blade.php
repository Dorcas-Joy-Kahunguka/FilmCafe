<!DOCTYPE html>
<html lang="en" class="no-js">

<head>

    <!-- Basic need -->
    <title>OnlyFilm | My Films</title>
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

</head>

<body>

    <script type="text/javascript">
    var signup_error = '';
    var login_error = '';
    var upload_error = '';
    var login_request = '';
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

    @if (Session::has('message'))

    @if (Session::get('message') == 'login')
    <script type="text/javascript">
    login_request = "<?php echo session()->get('message'); ?>";
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

    <!--upload form popup-->
    <div class="login-wrapper" id="upload-content">

        <div class="login-content">

            <a href="#" class="close">x</a>

            <h3>upload content</h3>

            <form method="POST" action="{{ route('store_film') }}" enctype="multipart/form-data">

                @csrf

                <div class="row">

                    <label for="title">
                        Title:
                        <input type="text" name="title" id="title" placeholder="Nairobi Half Life" required />
                    </label>

                    @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror

                </div>

                <div class="row">

                    <label for="description">
                        Description:
                        <textarea name="description" id="description" required cols="30" rows="10"></textarea>
                    </label>

                    @error('description')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror

                </div>

                <div class="row">

                    <label for="tags">
                        Tags:
                        <!-- checkboxes -->
                        <div class="checkboxes">

                            @foreach ($tags as $tag)
                            <div class="checkbox-group">
                                <input type="checkbox" id="action" name="genre[]" value="{{ $tag->id }}">
                                <label for="action">{{ $tag->tag_name }}</label>
                            </div>
                            @endforeach

                        </div>
                    </label>

                    @error('genre')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror

                </div>

                <div class="row">

                    <label for="file">
                        Film:
                        <input type="file" name="file" id="file" accept="video/*" required style="border: none;">
                    </label>

                    @error('file')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror

                </div>

                <div class="row">

                    <label for="file_thumbnail">
                        Thumbnail:
                        <input type="file" name="file_thumbnail" id="file_thumbnail" accept="image/*" required
                            style="border: none;">
                    </label>

                    @error('file_thumbnail')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror

                </div>


                <div class="row">
                    <button type="submit">upload</button>
                </div>

            </form>

        </div>

    </div>
    <!--end of upload form popup-->

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

                        <li class=""><a href="{{ route('home') }}">All Movies</a></li>

                        @if(auth()->user())
                        <li class=""><a href="#">Signed in as <?php echo auth()->user()->name ?></a></li>
                        <form class="search-form" method="POST" action="{{ route('logout') }}">
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
            <form method="POST" action="{{ route('my_movies') }}">
                @csrf
                <div class="top-search">
                    <input type="text" name="search_word" placeholder="Search for a movie or a TV Show">
                </div>
                <input class="normal-btn" type="submit" value="Search">
            </form>

        </div>
    </header>
    <!-- END | Header -->

    <div class="slider movie-items">

        <div class="container">

            <div class="row">

                <div class="social-link">
                    <div class="new-btn uploadLink"><a href="#">Add film</a></div>
                </div>

                <div class="slick-multiItemSlider">

                    @foreach ($films as $film)
                    <div class="movie-item">

                        <div class="mv-img">
                            @if(isset($film))
                            <a href="{{ route('movie_single', ['film' => $film] ) }}">
                                <img src="{{$film->thumbnail_path}}" alt="" width="285" height="437">
                            </a>
                            @else
                            <a href="#">
                                <img src="{{$film->thumbnail_path}}" alt="" width="285" height="437">
                            </a>
                            @endif
                        </div>

                        <div class="title-in">

                            <div class="cate">
                                @foreach($film->tags as $tag)
                                <span class="blue"><a href="#">{{ $tag->tag_name }}</a></span>
                                @endforeach
                            </div>

                            <h6>
                                @if(isset($film))
                                <a href="{{ route('movie_single', ['film' => $film] ) }}">{{$film->title}}</a>
                                @else
                                <a href="#">{{$film->title}}</a>
                                @endif
                            </h6>
                            <p><i class="ion-android-star"></i><span>7.4</span> /10</p>

                        </div>

                        <!-- <video width="400" controls poster="{{ asset('images/uploads/slider1.jpg') }}"> --> -->
                        <!-- <source src="{{$film->file_path}}"> -->
                        <!-- <source src="{{$film->file_path}}" type="video/mp4"> -->
                        <!-- <source src="mov_bbb.ogg" type="video/ogg"> -->
                        <!-- Your browser does not support HTML video. -->
                        <!-- </video> -->

                    </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/plugins2.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>