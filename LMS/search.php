<?php 

require_once('database.php');

    if(isset($_GET['page']))
    {
        $page =$_GET['page'];
    }
    else{
        $page = 1;
    }

    $num_per_page =10;
    $start_from = ($page-1)*$num_per_page;
    $query = "SELECT * FROM search LIMIT $start_from, $num_per_page";
    $result = mysqli_query($conn,$query);
    
?>
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
           
			<form method="POST" action="searchaction.php">
	  <label for="search-word"><strong>Search for</strong></label>
	  <input type="text" id="search-word" name="search-word">
	  
	  <label for="search-column"><strong>Search by</strong></label>
	  <select id="search-column" name="search-column">
	    <option value="title">Title</option>
	    <option value="author">Author</option>
	    <option value="subject">Subject</option>
		
	  </select>
	  <input type="submit" class="btn btn-primary" value="Search"><br>
      <hr>
	</form>
            <div id="count"></div>
            <table class="table table-hover table-light table-striped" id="table-data">
                <thead class="bg-dark text-warning">
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Publish_date</th>
                        <th>Subject</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($row=$result->fetch_assoc())
                        {
                    ?>
                    <tr>
                        <td><?= $row['id']; ?></td>
                        <td><?= $row['title']; ?></td>
                        <td><?= $row['author']; ?></td>
                        <td><?= $row['publish_date']; ?></td>
                        <td><?= $row['subject']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>

            </table>
            <?php 
    $pr_query ="SELECT * FROM search";
    $pr_result = mysqli_query($conn,$pr_query);
    $total_record = mysqli_num_rows($pr_result);

    $total_page = ceil( $total_record/$num_per_page);

    if($page>1)
    {
        echo "<a href='search.php?page=".($page-1)."'class='btn btn-danger py-2 px-3 ml-5'>PREV</a>";
    }

    for($i=1;$i<=$total_page;$i++)
    {
        echo "<a href='search.php?page=".$i."' class='btn btn-primary py-2 px-3 m-2 '>$i</a>";
    }

    if($i>$page)
    {
        echo "<a href='search.php?page=".($page+1)."' class='btn btn-danger py-2 px-3 m-2'>NEXT</a>";
    }
?>
        </div>
    </div>
</div>


</body>
</html>




