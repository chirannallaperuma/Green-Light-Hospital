<?php
if (!isset($_SESSION)) {
    
    session_start();

    if (!isset($_SESSION['user_id']) && $_SESSION['user_id'] == ''){
        echo '<script type="text/javascript">window.location = "login.php"</script>';
    }
}




?>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="jumbotron.css" rel="stylesheet">
<?php
include("header.php");
include("library.php");
$medicines = getMedicineTypes();

// noAccessForAdmin();
// noAccessIfNotLoggedIn();
if ($_SESSION["user-type"] != 'normal') {
    include("nav-bar.php");

}
?>

<div class="container ">
    <h2>Welcome, <?php echo $_SESSION["first_name"]; ?>!</h2>
    <div class='alert alert-info'>
        <strong>Info!</strong> Appointment will be booked only for today - <? echo date("d/m/y"); ?>. Appointment time
        will be between 10:30 to 3:30 or 4:30 to 9:30 once appointment is booked.
    </div>
    <h3>Enter Information</h3>
    <?php
    if(isset($_POST['apCondition'])){
        appointment_booking( $_POST);
    }
       
        
        
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class="col col-xl-6 col-sm-6 " >

        <!-- <div class="form-group ">
            <label for="usr">Full Name:</label>
            <input type="text" class="form-control" id="usr" name="apfullname" required>
        </div> -->


        <div class="form-group">
            <label for="pwd">Doctor Needed:</label>
            <select name="specialist" class="form-control">
                <?php
                foreach ($GLOBALS['medicines'] as $value) {

                    echo '<option value=' . $value["id"] . '>' . $value["doctor"] . '</option>';
                }
                foreach ($GLOBALS['medicines'] as $value) {
                    echo '<input type="hidden" name="' . $value["id"] . 'doctor" type="' . $value["id"] . 'doctor" value=' . $value["doctor"] . '>';
                }


                ?>
            </select>
        </div>

        <div class="form-group">
            <label for="pwd">Medical Condition / Purpose of visit:</label>
            <textarea class="form-control" id="pwd" name="apCondition" required></textarea>
            <input type="hidden" value="<?=$_SESSION["user_id"]?>" name="user">
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary">
            <input type="reset" name="" class="btn btn-danger">
        </div>
    </form>
</div>

