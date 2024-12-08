<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
 
    <title>Auction Website</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary px-2">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
   
    <!-- toggler btn and login/register btn -->
    <div class ="toggler-bar">
    <button type="button" class="btn btn-outline-primary me-3">Login</button>      
    <button type="button" class="btn btn-primary ">Register</button>
    <button class="navbar-toggler ms-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    </div>

    <!-- collapsible navbar -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Sales
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Auctions</a></li>
              <li><a class="dropdown-item" href="#">Products</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Our Services
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Hold an Auction</a></li>
            <li><a class="dropdown-item" href="#">Sell Products Directly</a></li>
            <li><a class="dropdown-item" href="#">Promote Your Listings</a></li>
            <li><a class="dropdown-item" href="#">Analytics Overview</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">How to bid</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>



         
      </ul>
 

     
     
    
    
    </div>
   
    
  </div>

</nav>

@yield('content')

<!-- footer -->















<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>