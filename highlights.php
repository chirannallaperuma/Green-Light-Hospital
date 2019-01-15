<?php
  session_start();


include("header.php");
include("library.php");
  
?>


<!DOCTYPE html>
<html>
 <head>  
     
<title>Green Light Hospital</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
</head>
 
<body>
    
<div class="container-fluid">
   <div class="row">
       <img src="image/hl.jpg" class="img-fluid" width="100%">
   </div>
</div> 
        
<div class="container">
  
     <H1 style="color:#000080;">Green Light News & Events</H1>
    
    <h2 class="text-success">Dengue Awareness Campaign </h2>
    <img src="image/d1.jpg" style="width:300px;height:300px;">
    <img src="image/d2.png" style="width:300px;height:300px;">
    <img src="image/d3.jpg" style="width:300px;height:300px;">
        <p style="color:#002366;">A day-long awareness camp on prevention of dengue was organised by the management of the Green Light Hospital on 14th May 2018 with the help from the villagers.</p>   

     <h2 class="text-success">Green Light Hospital Vesak Dansala </h2>
    <img src="image/f1.jpg" style="width:300px;height:300px;">
    <img src="image/f3.jpg" style="width:300px;height:300px;">
    <img src="image/f2.png" style="width:300px;height:300px;">
        <p style="color:#002366;">Green Light Hospital joined thousand of devotees celebrating the Vesak festival this year with this event. This Dansala was specially organized to improve the health and safety of the general public. It was palnned in accordance with the principles of Lord Buddha who taught his followers to help each other irrespective of race or religion. A familly first aid box containing medicines useful in day to day life was presented to all devotees who visited the dansala, together with advice on how First Aid could be administered. The aim was to make the public aware that the greatest wealth is health.</p>

        <br><br>
      <footer>
  <div class="container">
        <div class="row">

            <div class="col-md-4">
                <div class="card-box">
                    <div class="card-title">
                    <img src="image/consult.JPG" width="300" height="150">
                        <h2>CAREERS</h2>
                        <p>In keeping with our promise to deliver the very best in healthcare, we welcome the highest echelon of specialist consultants to join our professional team.</p>
                    </div>
                    <div class="card-link">
                        <a href="careers.php" class="c-link">Go
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box">
                    <div class="card-title">
                    <img src="image/6.JPG" width="300" height="150">
                        <h2>HIGHLIGHTS</h2>
                        <p>If you are passionate to serve humanity and be a part of a team that strives to provide the very best in patient care, please contact us. </p>
                    </div>
                    <div class="card-link">
                        <a href="" class="c-link">Go
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box">
                    <div class="card-title">
                    <img src="image/suggest.JPEG" width="300" height="150">
                        <h2>SUGGESTIONS & COMPLAINTS</h2>
                        <p>Your suggestions and complaints help us improve the quality of our customer services, helping us to serve you with greater efficiency.</p>
                    </div>
                    <div class="card-link">
                        <a href="complain.php" class="c-link">Go
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>



</footer>


</body>
<style type="text/css">
      

        .card-box {
            background: #FAFAFA;
            min-height: 300px;
            position: relative;
            padding: 30px 30px 20px;
            margin-bottom: 20px;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            position: relative;
            cursor: pointer;
        }

        .card-box:hover {
            background: linear-gradient(to right, #1fa2ff17 0%, #12d8fa2b 51%, #1fa2ff36 100%);
        }

        .card-box:after {
            display: block;
            background: #2196F3;
            border-top: 2px solid #2196F3;
            content: '';
            width: 100%;
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
        }

        .card-title h2 {
            margin: 0;
            padding-top: 5%;
            color: #2196F3;
            font-family: 'Oswald', sans-serif;
            text-transform: uppercase;
            font-size: 24px;
            line-height: 1;
            margin-bottom: 15px;
        }

        .card-title p {
            margin: 0;
            margin-bottom: 10px;
            font-size: 16px;
        }

        .card-link a {
            text-decoration: none;
            font-family: 'Oswald', sans-serif;
            color: #FF5722;
            font-size: 15px;
        }

      
    </style> 
        
    </body>
</html>
