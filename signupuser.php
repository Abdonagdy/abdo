<?php
       session_start();
       $con=mysqli_connect('localhost','root') ;
       mysqli_select_db($con,'quiz');
       $username=$_POST['name'];       
       $passward=$_POST['pass'];
       $email=$_POST['email'];
       $passward=md5('password');
       $sql= "INSERT INTO user_sign (username,userpassword,Email) VALUES('$username',' $passward',' $email')";
       mysqli_query($con,$sql);
       echo $username.$email;
?>