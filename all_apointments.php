<?php
if (!isset($_SESSION)) {
    session_start();
    
    $type=$_SESSION['user-type'];
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


include 'nav-bar.php';
?>


<div class='container'>
    
    <ul class="nav nav-pills ">

              <li class="nav-item" style="font" >
                <a class="nav-link" href="all_apointments.php">All Appointments</a>
              </li>
              
    </ul>

    <table class='table table-hover text-center  '>
        <thead class="thead-inverse">
        <tr>
            <th class="text-center">Appointment No</th>
            <th class="text-center">Patient's Full Name</th>
            <th class="text-center">Medical Condition</th>
            <th class="text-center">Doctor</th>
            <th class="text-center">Contact No</th>
            <?php if($type!=3){?>
            <th class="text-center">Action</th>
            <?php }?>
        </tr>
        </thead>
        <?php
        $result = getPatients();
        while ($row = $result->fetch_array()) {
            ?>
            <tr>
                <td><?= $row['appointment_no'] ?></td>
                <td><?= $row['full_name'] ?></td>
                <td><?= $row['medical_condition'] ?></td>
                <td><?= $row['dcotor'] ?></td>
                <td><?= $row['phone'] ?></td>
                <?php if($type!=3){?>
                <td>
                    <form method='post' action='library.php'>
                        <input type='hidden' name='app_no' value="<?= $row['appointment_no'] ?>">
                        <button type='submit' value='Edit' class='btn btn-default btn-sm'
                                aria-label='Edit' name='fetchAppointments'>Edit

                        </button>

                    </form>
                </td>
                <?php }?>
            </tr>
        <?php } ?>
    </table>
</div>

