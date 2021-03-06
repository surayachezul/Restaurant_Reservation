<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-----CSS Style---->
<link rel="stylesheet" href="{{ URL::asset('css/web.css') }}">

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<title>Restaurant Reservation</title>
</head>
<body>

<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item ">
          <a class="nav-link active" href="/homepage">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/menu">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/aboutus">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/contactus">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/bookatable">Book A Table</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/register">Register</a>
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class = "banner container-fluid p-0">
  <img src="{{url('/images_folder/3.jpg')}}" calt="Image"/>
</div>

@yield('content')  

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
