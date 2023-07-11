@extends('layouts.app1')
@include('includes.Appstyle')

@include('includes.AppJs')

@section('content')
<body style="background-color: #666666;">

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form"method="POST" action="{{ route('register') }}">
                        @csrf

                <H1>Welcom to Mr Broker</H1>
                <span class="login100-form-title p-b-43">
                        Create a new account
                    </span>

                <!-- <div class="bur">
                    <a  class="active" href="{{ route('register') }}">Buyer</a>
                    <a href="{{ route('register') }}">Broker</a>
                </div> -->

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">

                            <div class="col-md-6">
                                <input class="input100" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
                                      <span class="focus-input100"></span>
                    <span class="label-input100" ></span>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                        <!-- <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
 -->                 <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">


                                <input  class="input100" type="text" id="email" name="email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                                <span class="focus-input100"></span>
                        <span class="label-input100"></span>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>


              <!--   <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">

                   <div class="wrap-input100 validate-input">
                    <select name="cantry" class="opt" style="height: 50px;width:90px; border: 1px solid #e6e6e6;
                    border-bottom-left-radius: 10px;
                    border-top-left-radius: 10px;

                    background: none;
                     color:#999999; text-align: center " >
                        <option>SAU</option>
                        <option>DZA </option>
                        <option>EGY</option>
                        <option>JOR</option>
                        <option>KWT</option>
                        <option>LBN</option>
                        <option>LBY</option>
                        <option>MYS</option>
                        <option>MAR</option>
                        <option>OMN </option>
                        <option>QAT</option>
                    </select>

                            <div class="col-md-6">
                                <input id="mobile" type="text" class="form-control @error('name') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" autofocus>
                           <span class="focus-input100"></span>
                        <span class="label-input100"></span>
                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                </div> -->
              <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">


                         <select name="cantry" class="opt" style="height: 50px;width:90px; border: 1px solid #e6e6e6;
                    border-bottom-left-radius: 10px;
                    border-top-left-radius: 10px;

                    background: none;
                     color:#999999; text-align: center " >
                        <option>SAU</option>
                        <option>DZA </option>
                        <option>EGY</option>
                        <option>JOR</option>
                        <option>KWT</option>
                        <option>LBN</option>
                        <option>LBY</option>
                        <option>MYS</option>
                        <option>MAR</option>
                        <option>OMN </option>
                        <option>QAT</option>
                    </select>
                    <div class="col-md-6">
                    <input id="mobile" class="input100" type="number" class="form-control @error('name') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" autofocus>
                   <!--  <input class="input100" type="number" name="mobile"> -->
                    <span class="focus-input100"></span>
                    <span class="label-input1001"></span>
                      @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                </div>
<br>

  <!-- <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->
                 <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">


                            <div class="col-md-6">
                                <input id="password" type="password" class="input100" name="password" required autocomplete="current-password" placeholder="Password">
                                   <span class="focus-input100"></span>
                        <span class="label-input100"></span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="wrap-input100 validate-input">


                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="input100" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                 <span class="focus-input100"></span>
                        <span class="label-input100"></span>
                            </div>
                        </div>
                        <div class="wrap-input100 validate-input">

                            <div class="col-md-6">
                                <select class="input100" id="role"  class="form-control @error('name') is-invalid @enderror" name="role" value="{{ old('role') }}" required autocomplete="name" autofocus >

                                    <option>buyer</option>
                                    <option>broker</option>
                                </select>

                           <span class="focus-input100"></span>
                        <span class="label-input100"></span>
                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

              <!--   <div class="flex-sb-m w-full p-t-3 p-b-32">
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>

                    <div>
                        <a href="#" class="txt1">
                            Forgot Password?
                        </a>
                    </div>
                </div> -->


                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Create account
                    </button>
                </div>

                <div class="text-center p-t-46 p-b-20">
                        <span class="txt2">
                            You have an account?<a href="{{ route('login') }}">Log in </a>
                        </span>
                </div>



                <!-- <div class="text-center p-t-251 p-b-20">
                        <span class="txt3">
                            Or sign Up With
                        </span>
                </div>

                <div class="login100-form-social flex-c-m">
                    <a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
                        <i class="fa fa-facebook-f" aria-hidden="true"></i>
                    </a>

                    <a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
                        <i class="fa fa-google" aria-hidden="true"></i>
                    </a>
                </div> -->

            </form>

            <div class="login100-more" style="background-image: url('img/back.jpg');">
            </div>
        </div>
    </div>
</div>





<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>
<!--  <div class="container">
<div class="part1">
<h1>Welcom to Mr Broker</h1>
<p>Create a new account </p>

<div class="bur">
<a class="active" href="{{ route('register') }}" >Buyer</a>
<a href="{{ route('register') }}">Broker</a>
</div>

<div class="inp">
     <form method="POST" action="{{ route('register') }}">
                        @csrf
                           <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">

                            <div class="col-md-6">
                                <input class="input100" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                      <span class="focus-input100"></span>
                    <span class="label-input100">Name</span>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->
                 <!--    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">


                                <input  class="input100" type="text" id="email" name="email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <span class="focus-input100"></span>
                        <span class="label-input100">Email</span>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div> -->

                       <!--  <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->
                         <!-- <div class="wrap-input100 validate-input">

                            <div class="col-md-6">
                                <input id="role" type="number" class="form-control @error('name') is-invalid @enderror" name="role" value="{{ old('role') }}" required autocomplete="name" autofocus>
                           <span class="focus-input100"></span>
                        <span class="label-input100">Role</span>
                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->
                       <!--  <div class="row mb-3">
                            <label for="role" class="col-md-4 col-form-label text-md-end">{{ __('role') }}</label>

                            <div class="col-md-6">
                                <input id="role" type="number" class="form-control @error('name') is-invalid @enderror" name="role" value="{{ old('role') }}" required autocomplete="name" autofocus>

                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->
                      <!--   <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">


                            <div class="col-md-6">
                                <input id="password" type="password" class="input100" name="password" required autocomplete="current-password">
                                   <span class="focus-input100"></span>
                        <span class="label-input100">Password</span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>  -->

                        <!-- <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->

                       <!--  <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                       <br><br>
                          <div class="log">
            <input type="submit" value="create ">
         </div>

                    </form> -->

<!-- <div class="paa">
    <p>You have an account?<span><a href="{{ route('login') }}">Log in</a></span><br>
    <p class="ss">Or sign Up With</p></p>
    <div class="ico">
    <a href="https://mail.google.com"><img src="../img/gg.jpg"></a>
    <a href="https://www.facebook.com/"><img src="../img/ff.jpg"></a>
    </div>
</div>
</div>



</div>
</div>



<div class="hrr">
    <img src="../img/back.jpg">
</div>



</div> -->


@endsection
