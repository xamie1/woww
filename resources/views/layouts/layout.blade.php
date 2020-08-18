<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>WOMEN@WEB</title>

     <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @include('alertify::alertify')

   <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bs4.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- font-awesome -->
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">

</head>

<style>
    @font-face {
    font-family: 'Montserrat';
    font-weight: normal;
    font-style: normal;
    src: url("{{ asset('fonts/Montserrat-Medium.ttf') }}");
    }



@font-face {
  font-family: ' text-orangeflower';
  font-weight: normal;
  font-style: normal;
  src: url("{{ asset('fonts/Sunflower-Medium.ttf') }}");
}

@font-face {
  font-family: 'Sunflower-Bold';
  font-weight: bold;
  font-style: bold;
  src: url("{{ asset('fonts/Sunflower-Bold.ttf') }}");
}

@font-face {
  font-family: 'Varela';
  font-weight: normal;
  font-style: normal;
  src: url("{{ asset('fonts/VarelaRound-Regular.ttf') }}");
}

.text-sun{
   font-family: Sunflower, sans-serif;
}

.text-sun-bold{
   font-family: Sunflower-Bold, sans-serif;
}

.text-var{
   font-family: Varela, sans-serif;
}


    .custom-nav {
        background:   #fdfefe ;
        -webkit-box-shadow: 0 8px 6px -6px #999;
        -moz-box-shadow: 0 8px 6px -6px #999;
        box-shadow: 0 8px 6px -6px #999;
        height: 60px;
        line-height: 60px;
       
    }

    .panel {
        background: rgba(255, 255, 255, 0.36);
        border-radius: 7px;
        width: 90%;
    }

    body, html {
        background: #fff;
        font-size:90%;
        height: 100%;
        font-family: Montserrat, sans-serif;
    }

    .svg-div {
        background: url(../img/megaphone.svg);
        height: 600px;
        width: 100%;
        background-repeat: no-repeat;
        background-size: contain;
    }
    .text-grey{
        color: #c0c0c0;
        font-size: 10px;
    }
    .block-div p{
        display: inline-block;
        padding: 0 5px;
    }
    .block-div a{
        display: inline-block;
        padding: 0 5px;
    }
    .tag{
        border-radius: 4px;
        background: #999;
        color: white;
        padding: 2px 8px !important;
    }
    ul{
        padding:  0;
        margin-top: 25px;
    }
    ul li{
        list-style-type: none;
    }
    ol{
        padding-left: 16px;
    }

    /* footer styles */
    .fa-facebook{
    color:#3b5998;
}
.fa-linkedin{
    color:#0077B5;
}
.fa-twitter{
    color:#4099FF;
}
.fa-google{
    color:#d34836;
}
.bg-primary {
 background-color: #000 !important;
}

.bg-circle
{
  display: inline-block;
  width: 20px;
  height: 20px;
  padding: 14px 4px;
  color: #ececec;
  text-align: center;
  border-radius: 50%;
  line-height: 20px;
 
}

.bg-circle-outline
{
  width: 30px;
  height: 30px;
  color:smoke;
  /* padding: 8px 2px; */
  border: 2px solid;
  border-color: smoke;
  border-radius: 50%;
  line-height: 30px;
}


.bg-circle a, a:hover, .media a:focus
{
  text-decoration: none !important;
  outline: none;
  color: #ececec;
}
.bg-circle-outline a, a:hover, .media a:focus
{
  text-decoration: none !important;
  outline: none;
  color: #ececec;
}
.footer {
	background: #EDEFF1;
	height: auto;
	padding-bottom: 30px;
	position: relative;
	width: 100%;
	border-bottom: 1px solid #CCCCCC;
	border-top: 1px solid #DDDDDD;
}
.footer p {
	margin: 0;
}
.footer img {
	max-width: 100%;
}
.footer h3 {
	border-bottom: 1px solid #BAC1C8;
	color: #54697E;
	font-size: 18px;
	font-weight: 600;
	line-height: 27px;
	padding: 40px 0 10px;
	text-transform: uppercase;
}
.footer ul {
	font-size: 13px;
	list-style-type: none;
	margin-left: 0;
	padding-left: 0;
	margin-top: 15px;
	color: #7F8C8D;
}

.footer-container{
    border-top: 1px solid rgb(0,0,0, 0.3);
    /* border-bottom: 1px solid rgb(0,0,0, 0.3); */
    height: 100px;
    margin: 0 !important;
    background:   #2a3132 ;
}

.panel-login {
	/*border-color: #ccc;
	-webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);*/
}
.panel-login>.panel-heading {
	color: #00415d;
	background-color: #fff;
	border-color: #fff;
	text-align:center;
}
.panel-login>.panel-heading a{
    text-decoration: none;
    font-weight: bold;
    padding: 2px 5px;
    font-size: 12px;
    display:inline-block;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login>.panel-heading a.active{
	color: #029f5b;  
	/*font-size: 18px;*/
}
.no-display{
    display: none !important;
}
.dropdown-menu{
    margin-top:5px !important;
    height:90px;
    line-height:15px !important;
    font-size:15px;
}
.btn-dark{
    background: #028888;
}

.wrapper{
    min-height: 100%;
     margin-bottom: -100px;
    padding-bottom: 100px;
}

/* search button css */
#custom-search-input {
    margin:0;
    margin-top: 10px;
    padding: 0;
}

#custom-search-input .search-query {
    padding-right: 3px;
    padding-right: 4px \9;
    padding-left: 3px;
    padding-left: 4px \9;
    
    /* IE7-8 doesn't have border-radius, so don't indent the padding */
    margin-bottom: 0;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}

#custom-search-input button {
    border: 0;
    background: none;
    /** belows styles are working good */
    padding: 1px 5px;
    /* margin-top: 2px; */
    position: relative;
    left: 190px;
    bottom: 52px;
    /* IE7-8 doesn't have border-radius, so don't indent the padding */
    margin-bottom: 0;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    color:#D9230F;
}

.search-query:focus + button {
    z-index: 3;   
}

</style>


<body>

<!-- social media login -->

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '{198212437732239}',
      cookie     : true,
      xfbml      : true,
      version    : '{v3.2}'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

</script>
<!-- /social media login -->

<!-- fb comments api -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2&appId=198212437732239&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--  /fb comments api -->

    <div class="wrapper">

    <!-- custom nav -->
    <div class="custom-nav">
        <div class="container">
            <div class="row">
                <div class="col-4 py-4">
                    <div id="brand-div">
                        <h5 class="mb-0 text-sun-bold"><a class="text-orange"  href="{{ url('/posts') }}">WOMEN@WEB</a><h5>
                    </div>
                </div>
                 <div class="col-4"  id="custom-search-input">
                    @yield('search')
                </div>
                <div class="col-4">
                    @if(isset(Auth::user()->name))
                    
                        <a id="navbarDropdown" class="nav-link dropdown-toggle pull-right" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <hr>

                            <a href="{{ route('profile', Auth::user()->id) }}" class="dropdown-item">Profile</a>
                        </div>
                        
                    <div class="pt-2">
                        <a class="w-100"  href="{{ url('/new-post') }}">Report  <i class="fa fa-bullhorn"></i></a>
                    </div>
                
                    @else    
                        <a class="btn pt-4 " data-toggle="modal" data-target="#login-reg"> <i class="fa fa-user"></i> &nbsp Login/Join</a>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
    <!-- /custom nav -->

     <!-- Page Content -->
    <section>
       <main>
            @yield('content')
        </main>
    </section>


        <!-- Modal -->
        <div class="modal fade" id="login-reg" tabindex="-1" role="dialog" aria-labelledby="login-reg" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalLongTitle">Log in/Join</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                   <div class="modal-body">
                     <div class="row">
                        <div class="col-12">
                            <div class="panel panel-login">
                                <div class="panel-heading">
                                        <!-- <a href="#" class="active" id="login-form-link">Login</a> -->
                                        <!-- <a href="#" id="register-form-link">Register</a> -->
                                        Choose Account
                                    </div>
                                    <hr>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            {{--  login-form  --}}
                                            <!-- <form id="login-form" action="{{ route('login') }}" method="post" role="form" >
                                                @csrf

                                                <div class="form-group row">
                                                    <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                                        @if ($errors->has('email'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                                        @if ($errors->has('password'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-md-6 offset-md-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                            <label class="form-check-label" for="remember">
                                                                {{ __('Remember Me') }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-success btn-sm">Submit</button>
                                                
                                            </form> -->
                                            <a class="btn btn-primary btn-sm" href="{{ route('auth.social', 'facebook') }}" title="Facebook">
                                                <i class="fa fa-facebook"></i> login with facebook
                                            </a>
                                            <a class="btn btn-warning btn-sm" href="{{ route('auth.social', 'facebook') }}" title="Twitter">
                                                <i class="fa fa-twitter"></i> login with twitter
                                            </a>
                                            <a class="btn btn-dark btn-sm" href="{{ route('auth.social', 'facebook') }}" title="Google">
                                                <i class="fa fa-google"></i> login with google
                                            </a>

                                            {{--  /login form  --}}

                                            {{--  registration form  --}}
                                            <form id="register-form" action="{{ route('register') }}" method="post" role="form" style="display: none;">
                                                @csrf

                                                <div class="form-group row">
                                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                                        @if ($errors->has('name'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('name') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                                        @if ($errors->has('email'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="occupation" class="col-md-4 col-form-label text-md-right">{{ __('Occupation') }}</label>

                                                    <div class="col-md-6">
                                                        <select name="occupation" id="occupation" class="form-control">
                                                            <option value="engineer">engineer</option>
                                                            <option value="lawyer">lawyer</option>
                                                            <option value="teacher">teacher</option>
                                                            <option value="doctor">doctor</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="mstatus" class="col-md-4 col-form-label text-md-right">Marital Status</label>

                                                    <div class="col-md-6">
                                                        <select class="form-control" name="marital_status" id="marital_status">
                                                            <option value="s">Single</option>
                                                            <option value="m">Married</option>
                                                            <option value="da">Dating</option>
                                                            <option value="da">Devorced</option>
                                                        </select> 
                                                    </div>    
                                                </div>

                                                <div class="form-group row">
                                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                                        @if ($errors->has('password'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                                    </div>
                                                </div>

                                                <button type="submit" class="btn btn-success btn-sm">Submit</button>
                                            </form>
                                            {{--  /registration form  --}}

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> 

</div>

    <!-- footer -->
    <footer>
        <div class="container-fluid py-3 footer-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h6 class="text-sun-bold text-orange">WOMEN@WEB</h6>
                    </div>
                    <div class="col-md-5">
                        <div class="d-inline-block  pull-right">
                            <!-- <div class="bg-circle-outline d-inline-block text-center" style="background-color:#3b5998">
                                <a href="https://www.facebook.com/"><i class="fa fa-facebook text-white"></i></a>
                            </div>
                            <div class="bg-circle-outline d-inline-block text-center" style="background-color:#4099FF">
                                <a href="https://twitter.com/">
                                <i class="fa  fa-twitter text-white"></i></a>
                            </div>

                            <div class="bg-circle-outline d-inline-block text-center" style="background-color:#d34836">
                                <a href="https://www.google.com/">
                                <i class="fa  fa-google text-white"></i></a>
                            </div> -->
                        </div>
                        <br>
                    </div>
                <!--</div>
                 <p class="pull-right text-white mt-4 mr-0"><small>designed with <i class="fa fa-heart"></i> by mcpaul_ug</small></p>
            </div>-->
        </div>
    </footer>
    <!--/.footer-->

<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script>
    $(function() {

        $('#login-form-link').click(function(e) {
            $("#login-form").delay(100).fadeIn(100);
            $("#register-form").fadeOut(100);
            $('#register-form-link').removeClass('active');
            $(this).addClass('active');
            e.preventDefault();
        });
        $('#register-form-link').click(function(e) {
            $("#register-form").delay(100).fadeIn(100);
            $("#login-form").fadeOut(100);
            $("#login-form").fadeOut(100);
            $('#login-form-link').removeClass('active');
            $(this).addClass('active');
            e.preventDefault();
        });

        $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
            $("#success-alert").slideUp(500);
        });

        
     });
</script>
</body>
</html>