@extends('layouts.parant')


@section('title','Home')

@section('content')

    <section class="about section-padding" id="section_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 d-flex flex-column">
                    <h3 class="hh3">ADD POST</h3>
                    <div class="about-thumb bg-white shadow-lg">
                        <div class="about-info">
                            <div class="gg">
                                <img src="{{ asset ('img/prof1.png')}}" height="50px">
                                <span>Hassan Shamri</span>
                                <select class="ss">
                                    <!--                                        <option>Post Stauts</option>-->
                                    <option>Active</option>
                                    <option>None Active</option>

                                </select>
                            </div>

                            <div class="textpost">
                                <textarea name="Addpost" placeholder="Add New post"></textarea>
                            </div>
                            <i class="bi bi-emoji-smile-fill"></i>

                            <div class="icon1">
                                <button><i class="bi bi-geo-alt-fill" style="color: #BA3B46"></i></button>
                                <button><i class="bi bi-file-image" style="color: orange"></i></button>
                                <button><i class="bi bi-table" style="color: var(--primary-color)"></i></button>

                                <div class="lleft">
                                    <span>0 / 500</span>
                                    <input type="submit" value="Post">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class="about section-padding" id="section_3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 d-flex flex-column">
                    <h3 class="hh3">Last Posts</h3>
                    <div class="about-thumb bg-white shadow-lg">
                        <div class="about-info">



                            <div>
                                <button style="background: none;border: none" id="dropdownButton2"><i class="bi bi-three-dots"></i></button>
                                <ul id="dropdownMenu2">
                                    <li> Edite</li>
                                    <li>Edite Statue </li>
                                    <li>Delete</li>
                                </ul>
                            </div>



                            <div class="ggg">
                                <img src="{{asset ('img/prof1.png')}}" height="50px">
                                <span class="name">Hassan Shamri</span>
                                <div>

                                    <span class="h5">5h</span>

                                    <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>

                            <p class="prag">This file features a messages
                                experience with <br> several interactive elements, including scroll <br>groups
                            </p>

                            <div class="saved">
                                <div id="savedPostContainer"></div>
                                <button id="saveButton" onclick="myFunction()">
                                    <i class="bi bi-bookmark-fill" id="saved"></i>
                                </button>
                            </div>

                        </div>
                    </div>


                    <div class="about-thumb bg-white shadow-lg">
                        <div class="about-info">
                            <i class="bi bi-three-dots"></i>
                            <div class="ggg">
                                <img src="{{ asset ('images/prof1.png')}}" height="50px">
                                <span class="name">Hassan Shamri</span>
                                <div>

                                    <span class="h5">5h</span>

                                    <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>

                            <p class="prag">This file features a messages
                                experience with <br> several interactive elements, including scroll <br>groups
                            </p>

                            <div class="saved">
                                <div id="savedPostContainer1"></div>
                                <button id="saveButton1" onclick="myFunction()">
                                    <i class="bi bi-bookmark-fill" id="saved1"></i>
                                </button>
                            </div>


                        </div>
                    </div>



                    <div class="about-thumb bg-white shadow-lg">
                        <div class="about-info">
                            <i class="bi bi-three-dots"></i>
                            <div class="ggg">
                                <img src="{{asset ('img/prof22.png)}}" height="50px">
                                <span class="name">Nour Shamri</span>
                                <div class="sw">
                                    <span class="h5">5h</span>
                                    <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>

                            <p class="prag">This file features a messages
                                experience with <br> several interactive elements, including scroll <br>groups
                            </p>

                            <div class="saved">
                                <div id="savedPostContainer2"></div>
                                <button id="saveButton2" onclick="myFunction()">
                                    <i class="bi bi-bookmark-fill" id="saved2"></i>
                                </button>
                            </div>

                        </div>
                    </div>
                    <span class="slid">
                        <i class="bi bi-circle-fill"></i>
                        <i class="bi bi-circle-fill"></i>
                        <i class="bi bi-circle-fill"></i>
                    </span>
                </div>
            </div>
        </div>
    </section>




    <section class="projects section-padding pb-0" id="section_4">
        <div>
            <h3 style="padding-left: 250px;
                        color: var(--primary-color);
                        padding-bottom: 50px">Best Broker</h3>
        </div>
        <div class="arrow1">
            <i class="bi bi-arrow-left-circle"></i>
            <i class="bi bi-arrow-right-circle"></i>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="projects-thumb projects-thumb-small">
                        <div class="empty">
                            <img src="{{asset ('img/prof1.png')}}" height="50px" class="img_projects-thumb-small">
                        </div>
                        <div class="projects-info">
                            <div class="projects-title-wrap">
                                <small class="projects-small-title">Name One</small>
                                <div class="projects-btn-wrap mt-4">
                                    <span class="custom-btn btn">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </span>
                                </div>
                                <p class="pr">Lorem ipsum dolor sit amet, consetetur</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="col-lg-4 col-12">
                <div class="projects-thumb projects-thumb-small">
                    <div class="empty1">
                        <img src="{{asset ('img/prof22.png')}}" class="img_projects-thumb-small2">
                    </div>
                    <div class="projects-info">
                        <div class="projects-title-wrap">
                            <small class="projects-small-title">Name Two</small>
                            <div class="projects-btn-wrap mt-4">
                                <span class="custom-btn btn">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>

                                </span>
                            </div>
                            <div class="pr1">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="col-lg-4 col-12">
                <div class="projects-thumb projects-thumb-small">
                    <div class="empty">


                        <img src="{{asset ('img/prof3.png')}}" class="img_projects-thumb-small">
                    </div>
                    <div class="projects-info">
                        <div class="projects-title-wrap">
                            <small class="projects-small-title">Name Three</small>
                            <div class="projects-btn-wrap mt-4">
                                <span class="custom-btn btn">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>

                                </span>
                            </div>
                            <p class="pr">Lorem ipsum dolor sit amet, consetetur</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>




    </section>

    @endsection















