<?php
if (!isset($_SESSION)) {
    session_start();
    ini_set('display_errors',1);
}
?>

<?php
include("library.php");
include("header.php");
?>
<div class="container">
    <?php

    $fnameErr = "";
    $lnameErr = "";
    $addressErr = "";
    $emailErr = "";
    $telephoneErr = "";
    $passwordErr = "";
    $ageErr = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST['rfirstname'])) {
            $fnameErr = "First Name is required";
        }else {
            $rfirstname = test_input($_POST["rfirstname"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/",$rfirstname)) {
              $fnameErr = "Only letters and white space allowed"; 
            }
          }
        
        
        
        
        if (empty($_POST['rlastname'])) {
            $lnameErr = "Last Name is required";
        }else {
            $rlastname = test_input($_POST["rlastname"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/",$rlastname)) {
              $lnameErr = "Only letters and white space allowed"; 
            }
          }
        
        
        
        if (empty($_POST['raddress'])) {
            $addressErr = "Address is required";
        }
        
        
        
        if (empty($_POST['rage'])) {
            $ageErr = "Age is required";
        }if (empty($_POST['rphone'])) {
            $telephoneErr = "Telephone is required";

        }if (empty($_POST['remail'])) {
            $emailErr = "Email is required";
        }else {
            $remail = test_input($_POST["remail"]);
            // check if e-mail address is well-formed
            if (!filter_var($remail, FILTER_VALIDATE_EMAIL)) {
              $emailErr = "Invalid email format"; 
            }
        
        
        }if (empty($_POST['rpassword'])) {
            $passwordErr = "Password is required";
        }
        if (!empty($_POST['rfirstname'] && $_POST['rlastname'] && $_POST['raddress'] && $_POST['rage'] && $_POST['rphone'] && $_POST['remail'] && $_POST['rpassword'] )){
            if (isset($_POST['remail'])) {

                $i = registerPatient($_POST['remail'], $_POST['rpassword'], $_POST['rfirstname'], $_POST['rlastname'], $_POST['raddress'], $_POST['rage'], $_POST['rphone'], "patients");
                if ($i == 1) {
                    echo '<script type="text/javascript"> window.location = "add_patient.php"</script>';
                }
            } else {
                echo "<div class='alert alert-info'> <strong>Info!</strong> Login or Register to be able to book your appointment.
              </div>";
            }
        }


    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }


    ?>
    <div class="card small" style="margin-top: 2%; margin-left: 14%; width:50rem;">
        <div class="card-header" style="font-size: 18px;">Registration</div>
        <div class="card-body small">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> " class="form-horizontal">

                <div class="form-group">
                    <div class="col-sm-12 row">
                        <label for="usr" class="col-sm-2" style="font-size: 12px;">First Name:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="Firstname" name="rfirstname">
                            <span class="text-danger"> <?php echo $fnameErr; ?></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12 row">
                        <label for="usr" class="col-sm-2" style="font-size: 12px;">Last Name:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="Lastname" name="rlastname">
                            <span class="text-danger"> <?php echo $lnameErr; ?></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12 row">
                        <label for="usr" class="col-sm-2" style="font-size: 12px;">Address:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="Address" name="raddress">
                            <span class="text-danger"> <?php echo $addressErr; ?></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12 row">
                        <label for="usr" class="col-sm-2" style="font-size: 12px;">Age:</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" placeholder="Age" name="rage" min=1 max=120>
                            <span class="text-danger"> <?php echo $ageErr; ?></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12 row">
                        <label for="usr" class="col-sm-2" style="font-size: 12px;">Phone Number:</label>
                        <div class="col-sm-8">
                            <input type="tel" class="form-control" placeholder="Phone Number" name="rphone" pattern="^\d{10}$">
                            <span class="text-danger"> <?php echo $telephoneErr; ?></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12 row">
                        <label for="usr" class="col-sm-2" style="font-size: 12px;">Email:</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" placeholder="Email" name="remail">
                            <span class="text-danger"> <?php echo $emailErr; ?></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12 row">
                        <label for="usr" class="col-sm-2" style="font-size: 12px;">Password:</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" placeholder="Password" name="rpassword"
                            >
                            <span class="text-danger"> <?php echo $passwordErr; ?></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12 row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <input type="submit" class=" btn-sm float-right">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<style>
    body {
        background-image: url("image/walpaper.jpg");
        color: #999999;
    }
</style>