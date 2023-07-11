<!DOCTYPE html>
<html>
<head>
    <title>Suraj Connect</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style>
      html {
        height: 100%;
        margin: 0;
        padding: 0;
      }

      body {
        background-image: url("{{ asset('images/bg.jpg') }}");
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
      }
      h1{
        margin-left: 700px;
      }
      .container{
        margin-top: 450px;
        font-size: larger;
      }
      </style>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-dark navbar-laravel">
    <div class="container">
        <a class="navbar-brand text-light" href="#">Suraj Connect</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
   
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('register') }}">Register</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('logout') }}">Logout</a>
                    </li>
                @endguest
            </ul>
  
        </div>
    </div>
</nav>
<div class="container">
        <h1 class="text-center">&#x1F4E7; Smart Contact Manager &#x1F4E7;</h1>
        <h1 class="text-center">&#x1F4DE; Suraj Connect &#x1F4DE;</h1>
    </div>
@yield('content')
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> 
</body>
</html>