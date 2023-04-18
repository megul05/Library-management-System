<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>About</title>
</head>
<body class="bg-warning">
<nav class="navbar navbar-expand-sm bg-dark">
  <ul class="navbar-nav">
        <div class="navbar-header">
            <a class="navbar-brand text-warning" >LMS</a>
        </div>
        <li class="nav-item">
            <a class="nav-link active text-warning" href="about.php">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-warning" href="search.php">Search</a>
        </li>
    <!-- <form class=" navbar-nav ml-auto form-inline" action="search.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-warning" type="submit">Search</button>
  </form> -->
    </ul>
    <ul class="navbar-nav ml-auto">
        <a href="logout.php" class="text-warning"><i class="fa fa-sign-out text-warning"></i>Logout</a>
    </ul>

    
</nav>

<div class="container mt-3">
<div id="myCarousel" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
   
    <div class="carousel-item active">
      <img src="3.png" alt="Chicago" width="1100" height="300">
    </div>
    <div class="carousel-item">
      <img src="2.png" alt="New York" width="1100" height="300">
    </div>
    <div class="carousel-item">
      <img src="1.png" alt="New York" width="1100" height="300">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<br>
<div class="container1">
  <div class="card" style="width:1100px">
    <div class="card-body">
      <h4 class="card-title text-danger">LIBRARY MANAGEMENT SYSTEMS</h4>
      <p class="card-text ">
        <ul>
          <li>The primary objective of any library system is to collect, store, organize, retrieve and make
         available the information sources to the information users.</li>
          <li>
          It helps librarian to maintain the database of new books and the books
           that are borrowed by members along with their due dates.
          </li>
          <li>
          From here too we cansearch the records by clicking the 'Search' button.
          </li>
          <li>You can find books in an instant, issue/reissue books quickly, and manage all the data efficiently and orderly using this system.</li>
        </ul></p>
      <a href="search.php" class="btn btn-primary">Search</a>
    </div>
    <img class="card-img-bottom" src="4.png" alt="Card image" style="width:100%  ">
  </div>
</div>

</body>
</html>