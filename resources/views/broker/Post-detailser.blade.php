
@extends('layouts.parant')


@section('title','Post-detailser')

@section('content')

    <section class="about section-padding" id="section_3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 d-flex flex-column">
                    <h3 class="hh3">Post Details</h3>
                    <div class="about-thumb bg-white shadow-lg">
                        <div class="about-info">
                            <div>
                                <button style="background: none;border: none" id="dropdownButton2">
                                    <i class="bi bi-three-dots"></i></button>

                            </div>

                            <ul id="dropdownMenu2">
                                <a href="#"><li> Edite</li></a>
                                <a href="#"><li>Edite Statue</li></a>
                                <a href="#"><li>Delete</li></a>
                            </ul>
                            <div class="ggg">
                                <img src="{{asset('img/prof3.png')}}" height="60px">
                                <span class="name">Hassan Shamri</span>
                                <div>

                                    <span class="h5">5h</span>

                                    <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                    </label></div>
                            </div>

                            <p class="prag">This file features a messages experience with several<br>
                                interactive elements, including scroll groups
                            </p>

                            <div class="saved">
                                <div id="savedPostContainer1"></div>
                                <button id="saveButton1" onclick="myFunction()">
                                    <i class="bi bi-bookmark-fill"  id="saved1"></i>
                                </button>
                            </div>

                            <p class="offer1"> 5 Offers</p>
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


    @endsection

