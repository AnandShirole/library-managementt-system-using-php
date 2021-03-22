<?php
include "connection1.php";
include "navbar.php";

?>

<!DOCTYPE html>
<html>
    <head>
        <title> student Registration </title>
        <link rel="stylesheet" type="text/css" href="style2.css">
        <meta charset="utf-8">
        <meta name = "viewport" content = "width= device-width, initial-scale=1">

        <style>
            .box2{
                height: 650px;
                width:410px;
                margin-top: 5%;
                background-color:white;
                margin-left:38%;
                color:white;
                border-radius: 20px;
                position:absolute;
                }
</style>
    </head>

    <body>

<header>
<!--
    <div class="logo">
        <h1 style="color: white ; height:50px; padding-top: 50px;" >LIBRRAY MANAGEMENT SYSTEM </h1>
    </div>
        <nav>
            <ul>
                <li><a href = "index.php">HOME</a></li>
                <li><a href = "books.php">BOOKS</a></li>
                <li><a href = "student_login.php">STUDENT-LOGIN</a></li>
                <li><a href = "admin_login.php">ADMIN-LOGIN</a></li>
                <li><a href = "feedback.php">FEEDBACK</a></li>
            </ul>
        </nav>
    </header>
-->
        <div class="box2">
            <h1>User Registration form</h1>
        <form name="Registration" action="" method="post">
            <br><br>
        <div class = "login">
            <input type="text" name="First" class= " infut-field" placeholder="First Name" required="">
            <br><br>
            <input type="text" name="Last" class= " infut-field"  placeholder="Last Name" required="">
            <br><br>
            <input type="text" name="username" class= " infut-field"  placeholder=" username" required="" ><br><br>
            <input type="password" name="password" class= " infut-field" placeholder="password" required=""><br><br>
            <input type="text" name="roll" class= " infut-field"  placeholder="Roll no" required="">
            <br><br>
            <input type="text" name="gr" class= " infut-field"  placeholder="Gr No" required="">
            <br><br>
            <input type="text" name="email" class= " infut-field"  placeholder="Email" required="">
            <br><br>
            <input type="text" name="mobile" class= " infut-field"  placeholder="Mobile No" required="">
            <input type="submit" name="submit" class="btn btn-info" value="login">
            </div>
        </form>


        <?php

           if(isset($_POST['submit'])) 
           {

                mysqli_query($db,"INSERT INTO `student` VALUES('$_POST[First]', '$_POST[Last]', '$_POST[username]', '$_POST[password]', '$_POST[roll]', '$_POST[gr]', '$_POST[email]', '$_POST[mobile]');");
           }


        ?>
    </div>  
</body>
</html>