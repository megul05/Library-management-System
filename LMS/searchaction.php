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
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <title>Search</title>
    <style>
        .container{   
        align-items: center;  
        justify-content: center;
    }

    </style>
 
</head>
<body class="bg-warning">
<nav class="navbar navbar-expand-sm bg-dark">
  <ul class="navbar-nav">
        <div class="navbar-header">
            <a class="navbar-brand text-warning" href="#">LMS</a>
        </div>
        <li class="nav-item">
            <a class="nav-link active text-warning" href="about.php">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-warning" href="search.php">Search</a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <a href="logout.php" class="text-warning"><i class="fa fa-sign-out text-warning"></i>Logout</a>
    </ul>
</nav>
<div class="container justify-content-center">
    <div class="row justify-content-center">
        <div class="col-md-10bg-light mt-2 rounded">
        <?php

if (!isset($_POST['search-word']) || !isset($_POST['search-column'])) {
  die("Search word and column not provided.");
}
$search_word = $_POST['search-word'];
$search_column = $_POST['search-column'];

$output = '';
$db_host = 'localhost';
$db_username = 'root'; 
$db_password = ''; 
$db_name = 'login'; 
$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);


if (mysqli_connect_errno()) {
  die("Failed to connect to MySQL: " . mysqli_connect_error());
}

$query = "SELECT * FROM search WHERE $search_column LIKE '%$search_word%'";
$result = mysqli_query($conn, $query);

if (!$result) {
  die("Error in query: " . mysqli_error($conn));
}
$row_count = mysqli_num_rows($result);

if ($row_count > 0) {
  echo "<h4 class='text-dark'>Number of rows displayed: $row_count</h4>";
  echo "<table class='table table-hover table-light table-striped '>";
  echo " <thead class='bg-dark text-warning'>";
  echo "<tr><th>Id</th><th>Title</th><th>Author</th><th>Publish_date</th><th>Subject</th></tr>";
  while ($row = mysqli_fetch_assoc($result)) {
    echo " <tbody class='bg-light text-dark'>";
    echo "<tr><td>{$row['id']}</td><td>{$row['title']}</td><td>{$row['author']}</td><td>{$row['publish_date']}</td><td>{$row['subject']}</td></tr>";
  }
  echo "</table>";
} else {
  echo "No results found.";
}

mysqli_close($conn);
?>
        
        </div>
    </div>
</div>
