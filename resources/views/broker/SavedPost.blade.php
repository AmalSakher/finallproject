@extends('layouts.parant')


@section('title','SavedPost')

@section('content')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="Tooplate">

    <title>Save Post</title>

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

    <link href="../css/magnific-popup.css" rel="stylesheet">

    <link href="../css/postdetails.css" rel="stylesheet">


    <link href="../css/buyer%20profile.css" rel="stylesheet">

    <link href="../css/saved.css" rel="stylesheet">








    <!--

    Tooplate 2130 Waso Strategy

    https://www.tooplate.com/view/2130-waso-strategy

    Free Bootstrap 5 HTML Template

    -->

</head>

<main>



    <section class="about section-padding" id="section_3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 d-flex flex-column">
                    <h3>Saved Posts</h3>
                    <div class="about-thumb bg-white shadow-lg">
                        <div class="about-info">
                            <div>
                                <button style="background: none;border: none" id="dropdownButton15">
                                    <i class="bi bi-three-dots"></i></button>
                            </div>

                            <ul id="dropdownMenu15">
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
                                    <div id="savedPostContainer2"></div>
                                    <button id="saveButton9" onclick="myFunction()">
                                        <i class="bi bi-bookmark-fill"  id="saved9"></i>
                                    </button>
                                </div>

                                <span>5 offer</span>
                            </div>
                        </div>
                    </div>




                    <div class="about-thumb bg-white shadow-lg">
                        <div class="about-info">
                            <div>
                                <button style="background: none;border: none" id="dropdownButton11">
                                    <i class="bi bi-three-dots"></i></button>
                            </div>

                            <ul id="dropdownMenu11">
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

                                    <button  onclick="myFunction1()">
                                        <i class="bi bi-bookmark-fill"  id="saved10"></i>
                                    </button>
                                </div>
                                <span>5 offer</span>
                            </div>
                        </div>
                    </div>


                    <div class="about-thumb bg-white shadow-lg">
                        <div class="about-info">
                            <div>
                                <button style="background: none;border: none" id="dropdownButton12">
                                    <i class="bi bi-three-dots"></i></button>
                            </div>

                            <ul id="dropdownMenu12">
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
                                <button style="background: none;border: none"  onclick="myFunction11()">
                                    <i class="bi bi-bookmark-fill"  id="saved11"></i>
                                </button>
                                <span>5 offer</span>
                            </div>
                        </div>
                    </div>

                    <div class="about-thumb bg-white shadow-lg">
                        <div class="about-info">
                            <div>
                                <button style="background: none;border: none" id="dropdownButton14">
                                    <i class="bi bi-three-dots"></i></button>
                            </div>

                            <ul id="dropdownMenu14">
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
                                <button style="background: none;border: none" onclick="myFunction12()">
                                    <i class="bi bi-bookmark-fill"  id="saved12"></i>
                                </button>
                                <span>5 offer</span>
                            </div>
                        </div>
                    </div>


                    <div class="about-thumb bg-white shadow-lg">
                        <div class="about-info">
                            <div>
                                <button style="background: none;border: none" id="dropdownButton13">
                                    <i class="bi bi-three-dots"></i></button>
                            </div>

                            <ul id="dropdownMenu13">
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
                                <button style="background: none;border: none" onclick="myFunction13()">
                                    <i class="bi bi-bookmark-fill"  id="saved13"></i>
                                </button>
                                <span>5 offer</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>





</main>
</body>
</html>



@endsection
