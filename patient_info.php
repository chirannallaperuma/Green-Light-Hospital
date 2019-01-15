<?php
if (!isset($_SESSION)) {
    session_start();
    ini_set('display_errors',1);
}
if (!isset($_SESSION['user_id']) && $_SESSION['user_id'] == ''){
    echo '<script type="text/javascript">window.location = "../login.php"</script>';
}


?>
<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="jumbotron.css" rel="stylesheet">
<?php
include 'header.php';
include 'library.php';
// noAccessIfNotLoggedIn();
// noAccessForNormal();
// noAccessForNurse();
// noAccessForReceptionist();
// noAccessForAdmin();

include 'nav-bar.php';
?>


<div class='container'>
    <h5>Upcomming Appointments</h5>

    <table class='table table-hover text-center  '>
        <thead class="thead-inverse">
        <tr>
            <th class="text-center">Appointment No</th>
            <th class="text-center">Patient's Full Name</th>
            <th class="text-center">Medical Condition</th>
            <th class="text-center">Doctor</th>
            <th class="text-center">Contact No</th>
        </tr>
        </thead>
        <?php
        $result = getPatientsFor($_SESSION["user_id"]);

        while ($row = $result->fetch_array()) {
            ?>
            <tr>
                <td><?= $row['appointment_no'] ?></td>
                <td><?= $row['full_name'] ?></td>
                <td><?= $row['medical_condition'] ?></td>
                <td><?= $row['dcotor'] ?></td>
                <td><?= $row['phone'] ?></td>
            </tr>
        <?php } ?>
    </table>
</div>

