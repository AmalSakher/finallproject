

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="Tooplate">

        <title>MrBroker | @yield('title')</title>

        @include('includes.font')

        @include('includes.appStyleview')



    </head>

    <body id="section_1">

        <header class="site-header">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-3 col-md-5 col-7">
                        <a href="#" class="navbar-brand">MR <span class="text-danger">Broker</span></a>
                    </div>

                    <div class="col-lg-3 col-md-3 col-12 ms-auto">
                        <a href="Search Buyer.html"><i class="bi bi-search"></i></a>
                        <a href="Notification%20Buyer.html"><i class="bi bi-bell"></i></a>
                        <img src="{{asset('img/prof3.png')}}" height="35px">

                        <div>
                            <button style="background: none; border: none" id="dropdownButton">
                                <i class="bi bi-chevron-down"></i>
                            </button>


                        </div>

                </div>
            </div>
        </header>

        <nav class="navbar navbar-expand-lg bg-white shadow-lg">
            <div class="container">
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="cc">
                    <span style="font-size:20px;cursor:pointer;padding-left: 15px;padding-top: 15px" onclick="openNav()">&#9776; Browse Categories</span>
                </div>


                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul  class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="index.html"><small class="small-title"><strong class="text-warning"></strong></small> Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="Post.html"><small class="small-title"><strong class="text-warning"></strong></small> Post</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="offer.html"><small class="small-title"><strong class="text-warning"></strong></small> Offer</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="Buyer%20Profile.html"><small class="small-title"><strong class="text-warning"></strong></small> Profile</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="Saved Post.html"><small class="small-title"><strong class="text-warning"></strong></small> Saved Post</a>
                        </li>
                    </ul>
                    <div>


                        <ul class="dropdownMenu" id="dropdownMenu">
                            <a href="#">
                                //
                            <!-- <a href="{{ url('/page') }}">رابط الصفحة</a> -->

                                <li>Log Out</li>

                            </a>
                        </ul>

                        <div class="collapse1 navbar-collapse1" id="navbarNav1">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                            <ul  class="navbar-nav1 ms-auto">
                                <li class="nav-item">
                                    <a class="nav-link1 click-scroll" href="index.html"><small class="small-title"><strong class="text-warning"></strong></small> Home</a>
                                </li>

                                <li class="nav-item1">
                                    <a class="nav-link1 click-scroll" href="Post.html"><small class="small-title"><strong class="text-warning"></strong></small> Post</a>
                                </li>

                                <li class="nav-item1">
                                    <a class="nav-link1 click-scroll" href="offer.html"><small class="small-title"><strong class="text-warning"></strong></small> Offer</a>
                                </li>

                                <li class="nav-item1">
                                    <a class="nav-link1 click-scroll" href="Buyer%20Profile.html"><small class="small-title"><strong class="text-warning"></strong></small> Profile</a>
                                </li>

                                <li class="nav-item1">
                                    <a class="nav-link1 click-scroll" href="Saved Post.html"><small class="small-title"><strong class="text-warning"></strong></small> Saved Post</a>
                                </li>
                            </ul>
                            <div>




                            </div>
                        </div>
                    </div>
</nav>
<main >
            @yield('content')
        </main>
<footer class="site-footer footer">
            <div class="container">
                <div class="section">



                    <div class="section1">
                        <div class="grou">
                        <img src="{{asset ('img/logo2.png')}}">
                        <span>Mr Broker</span>
                        </div>
                        <p>Best Choice For You !</p>



                    </div>



                    <div class="section3">
                        <p class="p1">Our Social Links</p>

                        <ul class="social-icon">
                            <li><a href="https://facebook.com/tooplate" class="social-icon-link bi-facebook" style="background-color: #3D5A96"></a></li>

                            <li><a href="https://twitter.com/minthu" class="social-icon-link bi-twitter" style="background-color: #2AA3EF"></a></li>

                            <li><a href="https://pinterest.com/tooplate" class="social-icon-link bi bi-linkedin" style="background-color: #007AB7"></a></li>

                            <li><a href="https://www.youtube.com/tooplate" class="social-icon-link bi bi-google" style="background-color: #DA483F"></a></li>

                            <li><a href="https://www.youtube.com/tooplate" class="social-icon-link bi bi-envelope" style="background-color: #2F75EC"></a></li>

                        </ul>

                    </div>
                </div>


                                    <div class="section2">
                                        <nav>
                                            <ul>
                                                <li><a href="#">Contact</a></li>
                                                <li><a href="#">About</a></li>
                                                <li><a href="#">Privacy Policy </a></li>
                                                <li><a href="#">Our Site Map</a></li>
                                                <li><a href="#">Sponsor</a></li>
                                                <li><a href="#">Partner</a></li>
                                                <li><a href="#">Join Now</a></li>


                                            </ul>
                                        </nav>
                                    </div>



            </div>
            <div class="copyright">
                <p>2023. Mr Broker . All Right Reserved</p>
            </div>

        </footer>

@include('includes/appJsview')

</body>
</html>
