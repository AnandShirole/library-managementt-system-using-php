<?php
include "navbar.php";
?>


<!DOCTYPE html>
<html>
<h1></h1>
<head>
    <title> student Login </title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width= device-width, initial-scale=1">

</head>

<body>
<!--
        <div class="navbar">
        <a href="index.php">HOME</a> &nbsp; &nbsp; 
        <a href="books.php">BOOKS</a>
        <a href="feedback.php">FEEDBACK</a>
            <div class="subnav">
                <button class="subnavbtn">STUDENT-LOGIN<i class="fa fa-caret-down"></i></button>
                <div class="subnav-content">
                  <a href="student_login.php">LOGIN</a><br>
                  <a href="student_login.php">LOGOUT</a><br>
                  <a href="registration.php">SIGN-UP</a>
                </div>
              </div>    
-->
        <div class="login_img">
        <br>
        <div class="box1">
            <h1>User login form</h1>
            <form name="login" action="" method="">
                <br>
                <div class="login">
                    <input  type="text" class="input-field" name="username" placeholder=" username" required=""><br>
                    <input  type="password" class="input-field" name="password" placeholder="password"required=""><br><br>
                    <input type="submit" class="btn btn-info" value="login" style="color: black; width: 100px;">
                </div>
                <p style="color:black;">
                    <a href="">Forgot Password? </a> &nbsp;
                   <a href="registration.php"> new to this website? sign up</a>
                </p>
            </form>

        </div>
    </div>
</body>

</html>