<?php
session_start();
if (isset($_SESSION["user"])) {
    header("Location: front.php");
}
?>
<! DOCTYPE html>  
<html lang="en" >  
<head>  
  <meta charset="UTF-8">  
  <title> LMS 
 </title>  
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">  
</head>  
<style>  
 
.global-container {  
    height: 90%;  
    display: flex;  
    align-items: center;  
    justify-content: center;  
   
}  
form {  
    padding-top: 10px;  
    font-size: 14px;  
    margin-top: 30px;  
}  
.card-title {   
font-weight: 300;  
 }  
.btn {  
    font-size: 14px;  
    margin-top: 20px;  
}  
.login-form {   
    width: 330px;  
    margin: 20px;  
}  
.sign-up {  
    text-align: center;  
    padding: 20px 0 0;  
}  
.alert {  
    margin-bottom: -30px;  
    font-size: 13px;  
    margin-top: 20px;  
}  
</style>  
<body class="bg-warning">  
<div class="pt-3">  
  <div class="global-container"> 
    <div class="card login-form">  
    <div class="card-body">  
        <h3 class="card-title text-center"><strong>REGISTRATION</h3>  
        <div class="card-text"> 
        <?php

if(isset( $_POST["submit"])){
    $fullname= $_POST["fullname"];
    $email= $_POST["email"];
    $password= $_POST["password"];

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $errors= array();

    if(empty($fullname) OR empty($email)OR empty($password)){
        array_push($errors,"All fields are required");
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        array_push($errors,"Email is not valid");
    }

    if(strlen($password)<8){
        array_push($errors,"Password must be alteast 8 characters long");
    }

    require_once "database.php";
    $sql = "SELECT * FROM log_reg WHERE email = '$email'";
    $result = mysqli_query($conn,$sql);
    $rowCount = mysqli_num_rows($result);
    if ($rowCount > 0) {
        array_push($errors, "Email already exist");
    }


    if(count($errors)>0){
        foreach($errors as $error){
            echo "<div class='alert alert-danger'>$error</div>";
        }
    }
    else{
      
        $sql="INSERT INTO log_reg (fullname, email, password)  values (?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        $prestmt = mysqli_stmt_prepare($stmt, $sql);

        if($prestmt){
            mysqli_stmt_bind_param($stmt,"sss",$fullname,$email,$passwordHash);
            mysqli_stmt_execute($stmt);
            echo "<div class='alert alert-success'>Registration SuccessFull..</div>";
        }
        else{
            die("something went wrong");
        }
    }
}

?> 
            <form action="registration.php" id="form" method="post">  
                <div class="form-group">  
                    <label for="fullname">Enter Fullname</label>  
                    <input type="text" class="form-control form-control-sm" name="fullname" pattern="[a-zA-Z\s]+" id="fullname" >  
                </div> 
                <div class="form-group">  
                    <label for="email">Enter Email ID</label>  
                    <input type="email" class="form-control form-control-sm" name="email" id="email"  onblur="validateemail()" required>  
                </div>  
                <div class="form-group">  
                    <label for="password">Enter Password </label>  
                    
                    <input type="password" name="password" class="form-control form-control-sm" id="password">  
                </div>  
                <button type="submit" name="submit" class="btn btn-info btn-block">REGISTER</button>  
                <div class="sign-up">  
                    Already have an account? <a href="./login.php">Login </a>  
                </div> 
                
            </form>  
        </div> 
       
    </div>  
</div>  
</div> 

<script>
    function validateemail() 
 { 
 var x=document.getElementById("email").value; 
 var atposition=x.indexOf("@"); 
 var dotposition=x.lastIndexOf("."); 
 if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){ 
 alert("Mail id incorrect");
 }
 else{
 alert('Mail id is correct');
 }
 }
 
</script>
</body>  
</html>  