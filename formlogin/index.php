<?php
require 'functions.php';

if( isset($_POST["login"]) ){
    $username = $_POST["uname"];
    $password = $_POST["pass"];

    $cekdb = mysqli_query($conn, "SELECT * FROM accounts WHERE username = '$username' AND password = '$password'");
    $cekvalid = mysqli_num_rows($cekdb);
    if($cekvalid > 0){

        header('location:index2.php');

    } else{
        $reenter = true;
    }

}

?>

<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>    
    <link rel="stylesheet" type="text/css" href="css/style.css">    
</head>    
<body>    
    <h2>LOGIN PAGE</h2><br>    
    <div class="login">    
    <form id="login" method="post" action="">
        <?php
            if(isset($reenter)){  
               echo '<h3>Wrong username or password!</h3>';
            }
        ?>  
        <label><b>Username</b></label>    
        <input type="text" name="uname" id="uname" placeholder="Username">    
        <br><br>    
        <label><b>Password</b></label>    
        <input type="Password" name="pass" id="pass" placeholder="Password">    
        <br><br>    
        <input type="submit" name="login" id="login" value="Click to Login">       
        <br><br>    
        <input type="checkbox" id="check">    
        <span>remember me</span>
        <a href="#" id="forgot">Forgot Password</a>    
    </form>     
</div>    
</body>    
</html>     