<?php

     session_start();
     $con=mysqli_connect("localhost","root") ;
      mysqli_select_db($con,'quiz');
if(isset($_GET['submit']))
{
    
    
    if(!empty($_GET['quickcheck']))
    
       {
           $count=count($_GET['quickcheck']);
           echo"out of 5 , you have selected".$count."options";
           
      }
          echo"out of 5 , you have selected".$count."options";
}
    
echo"your score is 5";
?>