
<?php
use App\Http\Controllers\ProductController;
$total = ProductController::cartItem();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
            <meta name="description" content="Free Web tutorials">
            <meta name="keywords" content="HTML, CSS, JavaScript">
            <meta name="author" content="John Doe">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"/>

        <title>D.L Meds @yield('title')</title>
       <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
 integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" 
 crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" 
integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" 
crossorigin="anonymous">
    </head>

    <body>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">D.L MedShop</a>
    </div>
    <ul class="nav navbar-nav">
    
      <li><a href="/">Home</a></li>
      <li><a href="/about">about</a></li>
      <li><a href="/contact">Contact</a></li>
      <li><a href="/myorders">Orders</a></li>
      <li>
      <form class="navbar-form navbar-left" action='/search'>
    @csrf
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search" name="query" >
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form></li>
    </ul>
    @if(!(session()->has('user')))
    <ul class="nav navbar-nav navbar-right">
            <li><a href="">Cart(0)</a></li>
            
          </ul>
      @else
        <ul class="nav navbar-nav navbar-right">
            <li><a href="/cartlist">Cart({{$total}})</a></li>
            
          </ul>
      @endif
    <ul class="nav navbar-nav navbar-right">
    
      @if(!(session()->has('user')))
      <li><a href="/logview"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      @endif
      <li><a href="/regview"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      

      @if(session()->has('user'))
        <li>

        <div class="dropdown">
  <button style="margin-top:8%;" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">{{ Session::get('user')['name'] }}
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="/logout">Logout</a></li>
   
  </ul>
</div>
        </li>
        @else
        @endif

    </ul>
  </div>
</nav>
   

    <div>
  
        @yield('content')

        
      </div>
      
      <script src="https://code.jquery.com/jquery-1.12.4.min.js" 
      integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" 
      crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" i
    ntegrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" 
    crossorigin="anonymous"></script>

    </body>
</html>