<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Online Examination</title>
    <link rel="stylesheet" href="bootstrap.min.css"/>
    <link rel="stylesheet" href="main.css"/>
    <script>
    </script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light  navbar-dark bg-dark">
  <a class="navbar-brand" href="index.html">Online Examination</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.html">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signup.php">SIGN Up</a>
      </li>
          <li class="nav-item">
        <a class="nav-link " href="login.php">log in</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="About.html">About Us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
    <div class="banner">
        <div class="container text-center">
           <div class="row">
               <div class="col-12 card">
                   <br> <h2 class="text_center text_primary card-header">Start Exam</h2><br>
                    <h3 class=" text-center text_success card-header">Solve All Equestion and Take your Mark good luck :)</h3><br>
               </div>
            </div>
               <form action="check.php" method="GET">
                   <?php
                   session_start();
                   $con=mysqli_connect("localhost","root") ;
                   mysqli_select_db($con,'quiz');
                for($i=1;$i<6;$i++)
                {
             $q="SELECT * FROM questions where q_id = $i";
             $query=mysqli_query($con,$q);
              
            while($row=mysqli_fetch_array($query))
            {?>
              <div class="card">
                 <h3 class="card-header"><?php echo $row['q']; ?> </h3>
                  <?php
                         $q="select * from answar where ans_id = $i";
                         $query = mysqli_query($con,$q);
                         while($row= mysqli_fetch_array($query)){?>
                        <div class="card-body">
                          <input type="radio" name="quickcheck[<?php echo $row['ans_id'];?>]" value="<?php echo $row['aid'];?>">
                            <?php echo $row['ans'];?>
                        </div>
            <?php 
                                                            
             }
            }
            }
          ?>
        <input type="submit" value="submit" class="btn btn-success m-auto d-block">
                     </div>
        </form>
        </div>
    </div>
    <div class="s3">
         ALL Copy Right Are Reserved @2018 ..Developed By Abdellhameed Nagdy .
    </div>
    <script src="jquery.js"></script>
    <script src="popper.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="custom.js"></script>
</body>
</html>