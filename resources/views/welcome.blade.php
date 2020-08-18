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
  font-family: 'Sunflower';
  font-weight: normal;
  font-style: normal;
  src: url("{{ asset('fonts/Sunflower-Medium.ttf') }}");
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

.text-var{
   font-family: Varela, sans-serif;
}
  body, html {
      margin: 0 !important;
      max-width: 100%;
      overflow-x: hidden;
      height: 100%;
      font-family: Montserrat, sans-serif;
       /* background: url("{{ asset('img/3.jpg') }}") no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      background-size: cover;
      -o-background-size: cover; */
  }

  body::before {
  content: "";
  position: absolute;
  top: 0; 
  left: 0;
  width: 100%; 
  height: 100%;  
  opacity: .8; 
  z-index: -1;
  background: url("{{ asset('img/3.jpg') }}") no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;
}

.bg-2 {
  background: url("{{ asset('img/3.jpg') }}") no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;
}

</style>

<body>
<!-- main -->
      <div class="main">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h1 class="mt-5 text-orange text-shadow text-sun">WOMEN@WEB</h1>
              <p class="text-light text-shadow">Feel Abused as a woman? we are here to help you get the help you need. Find others like you and let those performing these acts of terror be exposed. Lets work to together to make the web a betterplace for all women </p>
            </div>
          </div>
          <div class="w-50">
							<a href="{{ route('posts') }}"><button class="btn btn-primary btn-welcome" type="button"><span class="glyphicon glyphicon-search"></span> Get Started</button></a>
          </div>
        </div>   
      </div> 
      <!-- /main -->
 </body>
</html>     