<?php
    if (!isset($_SESSION)) {
        session_start();
    }
?>

<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="css/main.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Green Light Hospital
    </title>
    

    
    
    
  </head>
  <body>
      <div class="container-fluid text-white bg-dark" swallpapertyle="padding-top: 10px;">
        <nav class="navbar  navbar-inverse navbar-fixed-top ">
         
            <ul class="nav nav-pills ">

              <li class="nav-item" style="font" >
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="services.php">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
               <li class="nav-item" >
                <a class="nav-link" href="login.php">Login</a>
              </li>
              <li class="nav-item " >
                <a class="nav-link" href="register.php">Register</a>
              </li>
              <?php
                if (isset($_SESSION['username'])) {
                    echo '<li class="nav-item " style="float:right; margin-left:600px;" > <a class="nav-link"  href="logout.php">Logout</a>
                  </li>';
                }
              ?>
            </ul>
        </nav>
        </div>
