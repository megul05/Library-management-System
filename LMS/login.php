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
  <title> LOGIN 
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
        <h3 class="card-title text-center"><strong>LOGIN </strong> </h3>  
        <div class="card-text">  
        <?php

if(isset( $_POST["login"])){
    $email= $_POST["email"];
    $password= $_POST["password"];

    require_once "database.php";
    $sql ="SELECT * FROM log_reg WHERE email='$email'";
    $result=mysqli_query($conn, $sql);
    $user=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if($user){
        if(password_verify($password, $user["password"])){
            session_start();
            $_SESSION["user"] = "yes";
            header("Location: front.php");
            die();
        }
        else{
            echo "<div class='alert alert-danger'>Incorrect password</div>";
        }
    }
    else{
        echo "<div class='alert alert-danger'>Enter email!....</div>";
    }

}
?>
            <form action="login.php" id="form" method="post">  
                <div class="form-group">  
                    <label for="email"><strong> Enter Email ID </strong></label>  
                    <input type="email" class="form-control form-control-sm" name="email" id="email" onblur="validateemail()" required  >  
                </div>  
                <div class="form-group">  
                    <label for="password"><strong>Enter Password </strong> </label>  
                    
                    <input type="password" class="form-control form-control-sm" name="password" id="password">  
                </div>  
                <button type="submit" name="login" class="btn btn-info btn-block"> LOGIN </button>  
                  
                <div class="sign-up">  
                   <strong> Don't have an account?</strong> <a href="./registration.php"><strong>Register</strong></a>  
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