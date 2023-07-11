


@extends('layouts.parant')
@section('title','MyPosts')

@section('content')





    <section class="about section-padding" id="section_3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 d-flex flex-column">
                    <h3 class="hh3">My POSTS</h3>
                    <div class="about-thumb bg-white shadow-lg">
                        <div class="about-info">
                            <i class="bi bi-three-dots"></i>
                            <div class="ggg">
                                <img src="{{asset('img/prof1.png')}}" height="60px">
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

                            <p class="offer"> 10 Offers</p>
                        </div>
                    </div>




                    <div class="about-thumb1 bg-white shadow-lg">
                        <div class="about-info1">
                            <p class="prag">This file features a messages experience <br>including scroll groups</p>
                            <input  type="submit" value="Accept" >
                        </div>
                    </div>

                    <div class="about-thumb1 bg-white shadow-lg" style="background-color: rgba(245,143, 41,10%);">
                        <div class="about-info1">
                            <p class="prag">This file features a messages experience <br>including scroll groups</p>
                            <input class="accept" type="submit" value="Pending" >
                        </div>
                    </div>


                    <div class="about-thumb1 bg-white shadow-lg">
                        <div class="about-info1">
                            <p class="prag">This file features a messages experience <br>including scroll groups</p>
                            <input  type="submit" value="Accept" >
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="about section-padding" id="section_4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 d-flex flex-column">
                    <div class="about-thumb bg-white shadow-lg">
                        <div class="about-info">
                            <i class="bi bi-three-dots"></i>
                            <div class="ggg">
                                <img src="{{asset ('img/prof3.png')}}" height="60px">
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

                            <p class="offer"> 10 Offers</p>
                        </div>
                    </div>




                    <div class="about-thumb1 bg-white shadow-lg">
                        <div class="about-info1">
                            <p class="prag">This file features a messages experience <br>including scroll groups</p>
                            <input  type="submit" value="Accept" >
                        </div>
                    </div>

                    <div class="about-thumb1 bg-white shadow-lg">
                        <div class="about-info1">
                            <p class="prag">This file features a messages experience <br>including scroll groups</p>
                            <input  type="submit" value="Accept" >
                        </div>
                    </div>


                    <div class="about-thumb1 bg-white shadow-lg" style="background-color: #F7F4EA">
                        <div class="about-info1">
                            <p class="prag">This file features a messages experience <br>including scroll groups</p>
                            <input class="contr"  type="submit" value="Contracted" >
                        </div>
                    </div>





                </div>
            </div>
        </div>


    </section>

    @endsection



