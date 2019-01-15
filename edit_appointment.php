<?php
if (!isset($_SESSION)) {
    session_start();
    if (!isset($_SESSION['user_id']) && $_SESSION['user_id'] == '') {
        echo '<script type="text/javascript">window.location = "login.php"</script>';
    }
}
?>
<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="jumbotron.css" rel="stylesheet">
<?php
include 'header.php';
include 'library.php';
$medicines = getMedicineTypes();

include 'nav-bar.php';
?>


<div class='container'>

    <div class="row">
        <div class="col-md-10 col-sm-10 col-xs-10">

            <div class="panel panel-default">
                <div class="panel-heading">Update Appointments</div>
                <div class="panel-body">
                    <div class="row form-group">
                        <?php

                        if ($_SERVER["REQUEST_METHOD"] == "POST") {

                            updateAppointment($_POST);
                        }

                        ?>
                        <div class="col-md-10 col-sm-12 col-xs-12">


                            <div class="col-md-8 col-sm-8 col-xs-8">
                                <form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                                      method="post">
                                    <?php
                                    $appointment = $_SESSION['appointmentData'];

                                    ?>

                                    <div class="form-group">
                                        <label for="pwd">Doctor Needed:</label>
                                        <select name="specialist" class="form-control">
                                            <?php foreach ($GLOBALS['medicines'] as $value) { ?>

                                                <?php if ($value["id"] == $appointment[1]) { ?>
                                                    <option selected
                                                            value="<?= $value['id'] ?>"><?= $value['doctor'] ?></option>
                                                <?php } else { ?>
                                                    <option value="<?= $value['id'] ?>"><?= $value['doctor'] ?></option>
                                                <?php } ?>
                                            <?php } ?>

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="pwd">Medical Condition / Purpose of visit:</label>
                                        <textarea class="form-control" id="pwd" name="apCondition"
                                                  required><?= $appointment[2]; ?></textarea>
                                        <input type="hidden" value="<?= $appointment[0]; ?>" name="app_no">
                                    </div>
                                    <div class="form-group col-sm-6 pull-right">
                                        <button type="submit" class="btn btn-primary pull-right">Update
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

