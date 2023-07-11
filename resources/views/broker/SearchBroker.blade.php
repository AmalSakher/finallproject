<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="Tooplate">

    <title>Post</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital
        ,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,900&display=swap" rel="stylesheet">

    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href="../css/bootstrap-icons.css" rel="stylesheet">

    <link href="../css/tooplate-waso-strategy.css" rel="stylesheet">

    <link href="../css/postdetails.css" rel="stylesheet">

    <link href="../css/search.css" rel="stylesheet">

    <link href="../css/notification%20buyer.css" rel="stylesheet">
    <link href="../css/Broker-Home.css" rel="stylesheet">









    <!--

    Tooplate 2130 Waso Strategy

    https://www.tooplate.com/view/2130-waso-strategy

    Free Bootstrap 5 HTML Template

    -->

</head>

<body id="section_1">

<header class="site-header">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-3 col-md-5 col-7">
                <a href="#" class="navbar-brand">MR <span class="text-danger">Broker</span></a>
            </div>


            <div class="col-lg-3 col-md-3 col-12 ms-auto">
                <a href="SearchBroker.html"><i class="bi bi-search"></i></a>
                <a href="NotificationBroker.html"><i class="bi bi-bell"></i></a>
                <img src="{{asset('img/prof3.png')}}" height="35px">

                <div>
                    <button style="background: none; border: none" id="dropdownButton">
                        <i class="bi bi-chevron-down"></i>
                    </button>


                </div>





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
                    <a class="nav-link click-scroll" href="Broker%20Home.html"><small class="small-title"><strong class="text-warning"></strong></small> Home</a>
                </li>



                <li class="nav-item">
                    <a class="nav-link click-scroll" href="Contracts.html"><small class="small-title"><strong class="text-warning"></strong></small> Contracts</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="ProfileBroker.html"><small class="small-title"><strong class="text-warning"></strong></small> Profile</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="SavedPostBroker.html"><small class="small-title"><strong class="text-warning"></strong></small> Saved Post</a>
                </li>
            </ul>
            <div>


                <ul class="dropdownMenu" id="dropdownMenu">
                    <a href="Login.html">
                        <li>Log Out</li>

                    </a>
                </ul>



                <div class="collapse1 navbar-collapse1" id="navbarNav1">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <ul  class="navbar-nav1 ms-auto">
                        <li class="nav-item">
                            <a class="nav-link1 click-scroll" href="Broker%20Home.html"><small class="small-title"><strong class="text-warning"></strong></small> Home</a>
                        </li>


                        <li class="nav-item1">
                            <a class="nav-link1 click-scroll" href="Contracts.html"><small class="small-title"><strong class="text-warning"></strong></small> Contracts</a>
                        </li>

                        <li class="nav-item1">
                            <a class="nav-link1 click-scroll" href="ProfileBroker.html"><small class="small-title"><strong class="text-warning"></strong></small> Profile</a>
                        </li>

                        <li class="nav-item1">
                            <a class="nav-link1 click-scroll" href="SavedPostBroker.html"><small class="small-title"><strong class="text-warning"></strong></small> Saved Post</a>
                        </li>
                    </ul>
                    <div>




                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>



<main>



    <section class="about section-padding" id="section_3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 d-flex flex-column">

                    <div class="search">
                        <form action="" class="search-bar">
                            <input type="text" placeholder="search">
                            <button type="submit">
                                <i class="bi bi-search"></i>
                            </button>
                        </form>
                    </div>


                    <div class="choose">
                        <form action="" class="choose-but">
                            <button type="submit" class="but1">Service</button>
                            <button type="submit" class="but2">Keyword</button>
                        </form>
                    </div>



                    <div class="about-thumb bg-white shadow-lg">
                        <div class="about-info">
                            <div>
                                <button style="background: none;border: none" id="dropdownButton7">
                                    <i class="bi bi-three-dots"></i></button>
                            </div>

                            <ul id="dropdownMenu7">
                                <a href="#"><li>Report</li></a>
                            </ul>
                            <div class="ggg">
                            <img src="{{asset('img/prof1.png')}}" height="50px">
                                <span class="name">Hassan Shamri</span>
                                <div>
                                    <span class="h5">5h</span>
                                    <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                    </label></div>
                            </div>

                            <p class="prag">This file features a messages
                                experience with several <br>
                                interactive elements, including scroll groups
                            </p>


                            <div class="fotbox">
                                <div class="saved">
                                    <div id="savedPostContainer4"></div>
                                    <button id="saveButton4" onclick="myFunction()">
                                        <i class="bi bi-bookmark-fill"  id="saved4"></i>
                                    </button>
                                </div>
                                <span>5 offer</span>
                            </div>
                        </div>
                    </div>




                    <div class="about-thumb1 bg-white shadow-lg">
                        <div class="about-info1">
                            <p class="prag">Type your offer ..</p>
                            <i class="bi bi-emoji-smile-fill"></i>
                            <span>0/150</span>
                            <button  type="submit">Post</button>
                        </div>
                    </div>

                    <div class="about-thumb1 bg-white shadow-lg">
                        <div class="about-info1">
                            <p class="prag">This file features a messages experience including scroll <br>groups
                                This file features a messages experience</p>
                        </div>
                    </div>


                    <div class="about-thumb1 bg-white shadow-lg">
                        <div class="about-info1">
                            <p class="prag">This file features a messages experience including scroll <br>groups
                                This file features a messages experience</p>
                        </div>
                    </div>



                    <div class="about-thumb bg-white shadow-lg">
                        <div class="about-info">
                            <div>
                                <button style="background: none;border: none" id="dropdownButton9">
                                    <i class="bi bi-three-dots"></i></button>
                            </div>

                            <ul id="dropdownMenu9">
                                <a href="#"><li>Report</li></a>
                            </ul>
                            <div class="ggg">
                            <img src="{{asset('img/prof1.png')}}" height="50px">
                                <span class="name">Hassan Shamri</span>
                                <div>
                                    <span class="h5">5h</span>
                                    <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                    </label></div>
                            </div>

                            <p class="prag">This file features a messages
                                experience with several <br>
                                interactive elements, including scroll groups
                            </p>


                            <div class="fotbox">
                                <div class="saved">
                                    <div id="savedPostContainer9"></div>
                                    <button id="saveButton9" onclick="myFunction()">
                                        <i class="bi bi-bookmark-fill"  id="saved9"></i>
                                    </button>
                                </div>
                                <span>5 offer</span>
                            </div>
                        </div>
                    </div>




                    <div class="about-thumb1 bg-white shadow-lg">
                        <div class="about-info1">
                            <p class="prag">Type your offer ..</p>
                            <i class="bi bi-emoji-smile-fill"></i>
                            <span>0/150</span>
                            <button  type="submit">Post</button>
                        </div>
                    </div>

                    <div class="about-thumb1 bg-white shadow-lg">
                        <div class="about-info1">
                            <p class="prag">This file features a messages experience including scroll <br>groups
                                This file features a messages experience</p>
                        </div>
                    </div>


                    <div class="about-thumb1 bg-white shadow-lg">
                        <div class="about-info1">
                            <p class="prag">This file features a messages experience including scroll <br>groups
                                This file features a messages experience</p>
                        </div>
                    </div>





                    <div class="about-thumb bg-white shadow-lg">
                        <div class="about-info">
                            <div>
                                <button style="background: none;border: none" id="dropdownButton10">
                                    <i class="bi bi-three-dots"></i></button>
                            </div>

                            <ul id="dropdownMenu10">
                                <a href="#"><li>Report</li></a>
                            </ul>
                            <div class="ggg">
                            <img src="{{asset('img/prof1.png')}}" height="50px">
                                <span class="name">Hassan Shamri</span>
                                <div>
                                    <span class="h5">5h</span>
                                    <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                    </label></div>
                            </div>

                            <p class="prag">This file features a messages
                                experience with several <br>
                                interactive elements, including scroll groups
                            </p>


                            <div class="fotbox">
                                <div class="saved">
                                    <div id="savedPostContainer8"></div>
                                    <button id="saveButton8" onclick="myFunction()">
                                        <i class="bi bi-bookmark-fill"  id="saved8"></i>
                                    </button>
                                </div>
                                <span>5 offer</span>
                            </div>
                        </div>
                    </div>




                    <div class="about-thumb1 bg-white shadow-lg">
                        <div class="about-info1">
                            <p class="prag">Type your offer ..</p>
                            <i class="bi bi-emoji-smile-fill"></i>
                            <span>0/150</span>
                            <button  type="submit">Post</button>
                        </div>
                    </div>

                    <div class="about-thumb1 bg-white shadow-lg">
                        <div class="about-info1">
                            <p class="prag">This file features a messages experience including scroll <br>groups
                                This file features a messages experience</p>
                        </div>
                    </div>


                    <div class="about-thumb1 bg-white shadow-lg">
                        <div class="about-info1">
                            <p class="prag">This file features a messages experience including scroll <br>groups
                                This file features a messages experience</p>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </section>



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
</main>
</body>
</html>



<!-- JAVASCRIPT FILES -->
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.sticky.js"></script>
<script src="../js/jquery.magnific-popup.min.js"></script>
<script src="../js/magnific-popup-options.js"></script>
<script src="../js/click-scroll.js"></script>
<script src="../js/custom.js"></script>
<script src="../js/profile.js"></script>
<script src="../js/saved.js"></script>
<script src="../js/notificatin.js"></script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</body>
</html>
