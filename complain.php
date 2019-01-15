<?php
  session_start();


// $file = 'library.php';
// if(file_exists($file)){
//        include($file);
// }else{
//       echo "File not found: $file";
// }

include("header.php");
include("library.php");
  
?>


<!DOCTYPE html>
<html>
 <head>  
     
  <title>Green Light Hospital</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
   
</head>
 
<body>
    
<div class="container-fluid">
   




    <div class="row">
       <img src="image/1.png" class="img-fluid" width="100%">
   </div>
</div> 
        
<div class="container">


      <?php
        $emailErr ="";
        $commentErr= "";

        if($_SERVER["REQUEST_METHOD"]=="POST"){
          if(empty($_POST['remail'])){
            $emailErr="email is requierd";
          }


          if (empty($_POST['rcomment'])) {
            $commentErr="comment is required";
          }
        

        if(isset($_POST['remail'])){
          $i=complaints($_POST['rusername'],$_POST['remail'],$_POST['rnumber'],$_POST['rcomment']);

          if($i==1){
            echo '<script type="text/javascript"> window.location ="complain.php"</script>';
          }

          }else{

          }
        }

        unset($_POST);

    ?>   


  
     <h2 class="text-primary">Your Suggestions & Complaints</h2>
    
    <h4 class="text-success"><i>We value your ideas </i></h4>
    
    
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    
<div class="col-xs-6 col-sm-6">
   <div class="form-group">
        
   
    <div class="form-group">
        <label for="jobTitle">User Name:</label>
            <input type="text" class="form-control" id="Uname" placeholder="Enter User Name" name="rusername" required>
    </div>
    
    <div class="form-group">
        <label for="jobType">Email:</label>
            <input type="text" class="form-control" id="email" placeholder="Enter Email" name="remail" required>
            <span class="error">*<?php echo $emailErr;?></span>
    </div>
    
     <div class="form-group">
        <label for="jobAmount">Telephone:</label>
            <input type="text" class="form-control" id="phone" placeholder="Enter Phone Number" name="rnumber" pattern="^\d{10}$" required>
    </div>
     <div class="form-group">
        <label for="jobPeriod">Comment:</label>
            <input type="text" class="form-control"  id="jobPeriod" placeholder="Enter Comment" name="rcomment" required>
        <span class="error">*<?php echo $commentErr;?></span>
    </div>
       
    
    
       <div class="form-row text-right">
           
        <div class="col-12">
         <button type="button" class="btn btn-primary">Cancel</button>
        <button type="submit" name="save" id="save" class="btn btn-primary">Submit</button>
       </div>
    </div>
 </div>
        
   
 
</form>
   
        </div>

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
                        <a href="highlights.php" class="c-link">Go
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
