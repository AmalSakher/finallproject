@extends('layouts.parant')

@section('title','Profile')


@section('content')





<main>

    <section class="about section-padding" id="section_3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 d-flex flex-column">
                    <div class="about-thumb1 bg-white shadow-lg1">
                        <div class="about-info">
                            <div class="gg">
                                <img src="{{asset('img/prof4.png')}}" height="150px">
                                <span>Hassan Shamri</span>
                                <i class="bi bi-geo-alt-fill">Palestine</i>
                                <div class="edit"  >
                                    <button onclick="myFunction()">Edit Profile </button>
                                </div>
                            </div>
                        </div>
                    </div>


                     <div class="forme">
                         <form action="">

                             <div class="for1">

                                 <div>
                                 <label>First Name</label>
                                 <input id="inp" type="text" name="name" placeholder="Hassan">
                                 </div>

                                 <label>Country</label>
                                 <input id="inp1" type="text" name="Country" placeholder="Palestine" >


                                 <label>Mobile</label>
                                 <input id="inp2"type="number" name="Mobile" placeholder="+970 597 44 5678" >

                             </div>

                             <div class="for2">

                                 <label>Last Name</label>
                                 <input id="inp3" type="text" name="name" placeholder="Hassan" >

                                 <label>City</label>
                                 <input  id="inp4" type="text" name="City" placeholder="Gaza" >


                             <label for="date" >
                                 Birthday:
                             </label>
                             <input id="inp5" type="text" name="date" id="date" placeholder="14 May 1995"  pattern="\d{4}-\d{2}-\d{2}">
                             </div>

                         </form>

                     </div>

                </div>
            </div>
        </div>
    </section>







    @endsection
