<!DOCTYPE html>
<html lang="en" class="no-js">

<!-- moviegridfw07:38-->

<head>

    <!-- Basic need -->
    <title>Library</title>

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
    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

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

            <form method="post" action="#">

                <div class="row">
                    <label for="username">
                        Username:
                        <input type="text" name="username" id="username" placeholder="Hugh Jackman"
                            pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
                    </label>
                </div>

                <div class="row">
                    <label for="password">
                        Password:
                        <input type="password" name="password" id="password" placeholder="******"
                            pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                            required="required" />
                    </label>
                </div>

                <div class="row">
                    <div class="remember">
                        <div>
                            <input type="checkbox" name="remember" value="Remember me"><span>Remember me</span>
                        </div>
                        <a href="#">Forget password ?</a>
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

            <form method="post" action="#">

                <div class="row">
                    <label for="username-2">
                        Username:
                        <input type="text" name="username" id="username-2" placeholder="Hugh Jackman"
                            pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
                    </label>
                </div>

                <div class="row">
                    <label for="email-2">
                        your email:
                        <input type="password" name="email" id="email-2" placeholder=""
                            pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                            required="required" />
                    </label>
                </div>

                <div class="row">
                    <label for="password-2">
                        Password:
                        <input type="password" name="password" id="password-2" placeholder=""
                            pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                            required="required" />
                    </label>
                </div>

                <div class="row">
                    <label for="repassword-2">
                        re-type Password:
                        <input type="password" name="password" id="repassword-2" placeholder=""
                            pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                            required="required" />
                    </label>
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
                    <a href="{{ url('/') }}">
                        <img class="logo" src="{{ asset('images/logo1.png') }}" alt="" width="119" height="58">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav flex-child-menu menu-left">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav flex-child-menu menu-right">
                        <li class="loginLink"><a href="#">LOG In</a></li>
                        <li class="btn signupLink"><a href="#">sign up</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

            </nav>

            <!-- top search form -->
            <div class="top-search">
                <input type="text" placeholder="Search for a movie, TV Show or celebrity that you are looking for">
            </div>

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
                        <p>Found <span>1,608 movies</span> in total</p>
                        <label>Sort by:</label>
                        <select>
                            <option value="popularity">Popularity Descending</option>
                            <option value="popularity">Popularity Ascending</option>
                            <option value="rating">Rating Descending</option>
                            <option value="rating">Rating Ascending</option>
                            <option value="date">Release date Descending</option>
                            <option value="date">Release date Ascending</option>
                        </select>
                        <a href="#" class="list"><i class="ion-ios-list-outline "></i></a>
                        <a href="{{ route('movie_grid_fw') }}" class="grid"><i class="ion-grid active"></i></a>
                    </div>

                    <div class="flex-wrap-movielist mv-grid-fw">

                        <div class="movie-item-style-2 movie-item-style-1">
                            <img src="{{ asset('images/uploads/mv1.jpg') }}" alt="">
                            <div class="hvr-inner">
                                <a href="{{ route('movie_single') }}">
                                    Read more<i class="ion-android-arrow-dropright"></i>
                                </a>
                            </div>
                            <div class="mv-item-infor">
                                <h6><a href="#">oblivion</a></h6>
                                <p class="rate">
                                    <!-- <i class="ion-android-star"></i> -->
                                    <span>8.1</span> /10
                                </p>
                            </div>
                        </div>

                        <div class="movie-item-style-2 movie-item-style-1">
                            <img src="{{ asset('images/uploads/mv2.jpg') }}" alt="">
                            <div class="hvr-inner">
                                <a href="{{ route('movie_single') }}">
                                    Read more <i class="ion-android-arrow-dropright"></i>
                                </a>
                            </div>
                            <div class="mv-item-infor">
                                <h6><a href="#">into the wild</a></h6>
                                <p class="rate">
                                    <!-- <i class="ion-android-star"></i> -->
                                    <span>7.8</span> /10
                                </p>
                            </div>
                        </div>

                        <div class="movie-item-style-2 movie-item-style-1">
                            <img src="{{ asset('images/uploads/mv4.jpg') }}" alt="">
                            <div class="hvr-inner">
                                <a href="{{ route('movie_single') }}">
                                    Read more <i class="ion-android-arrow-dropright"></i>
                                </a>
                            </div>
                            <div class="mv-item-infor">
                                <h6><a href="#">Mulholland pride</a></h6>
                                <p class="rate">
                                    <!-- <i class="ion-android-star"></i> -->
                                    <span>7.2</span> /10
                                </p>
                            </div>
                        </div>

                        <div class="movie-item-style-2 movie-item-style-1">
                            <img src="{{ asset('images/uploads/mv1.jpg') }}" alt="">
                            <div class="hvr-inner">
                                <a href="{{ route('movie_single') }}">
                                    Read more <i class="ion-android-arrow-dropright"></i>
                                </a>
                            </div>
                            <div class="mv-item-infor">
                                <h6><a href="#">oblivion</a></h6>
                                <p class="rate">
                                    <!-- <i class="ion-android-star"></i> -->
                                    <span>8.1</span> /10
                                </p>
                            </div>
                        </div>

                        <div class="movie-item-style-2 movie-item-style-1">
                            <img src="{{ asset('images/uploads/mv2.jpg') }}" alt="">
                            <div class="hvr-inner">
                                <a href="{{ route('movie_single') }}">
                                    Read more <i class="ion-android-arrow-dropright"></i>
                                </a>
                            </div>
                            <div class="mv-item-infor">
                                <h6><a href="#">into the wild</a></h6>
                                <p class="rate">
                                    <!-- <i class="ion-android-star"></i> -->
                                    <span>7.8</span> /10
                                </p>
                            </div>
                        </div>

                        <div class="movie-item-style-2 movie-item-style-1">
                            <img src="{{ asset('images/uploads/mv4.jpg') }}" alt="">
                            <div class="hvr-inner">
                                <a href="{{ route('movie_single') }}">
                                    Read more <i class="ion-android-arrow-dropright"></i>
                                </a>
                            </div>
                            <div class="mv-item-infor">
                                <h6><a href="#">Mulholland pride</a></h6>
                                <p class="rate">
                                    <!-- <i class="ion-android-star"></i> -->
                                    <span>7.2</span> /10
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="topbar-filter">
                        <label>Movies per page:</label>
                        <select>
                            <option value="range">20 Movies</option>
                            <option value="saab">10 Movies</option>
                        </select>

                        <div class="pagination2">
                            <span>Page 1 of 2:</span>
                            <a class="active" href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">...</a>
                            <a href="#">78</a>
                            <a href="#">79</a>
                            <a href="#"><i class="ion-arrow-right-b"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
    <!-- footer section-->

    <!-- end of footer section-->

    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/plugins2.js"></script>
    <script src="js/custom.js"></script>
</body>

<!-- moviegridfw07:38-->

</html>