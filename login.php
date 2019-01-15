<?php
if (!isset($_SESSION)) {
    session_start();
}
?>

<?php
include("library.php");
include("header.php");
?>
<div class="container align-center">
    <?php
    if (isset($_POST['email'])) {
        // $type = $_POST['type'];
        $i = login($_POST['email'], $_POST['password']);
        if ($i == 1) {
            $email = $_POST['email'];
            checkUser($email);
            // noAccessIfLoggedIn();
        }
    }
    ?>
    <div class="card small col-lg-8" style="margin-top: 10%;margin-left: 25%;margin-right: 20%; width:35rem;">
        <!--        <div class="card-header">User Login</div>-->
        <div class="card-body small">
            <section>
                <h1>Sign in</h1>
                <!-- <ul class="breadcrumb pull-right" style="font-size:15px;">
                    Log in with your account
                </ul> -->
            </section>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <div class="form-group">
                    <div class="col-sm-12 row">
                        <!-- <label for="usr" class="col-sm-2" style="font-size:11px;" >Email:</label> -->
                        <div class="col-sm-8" style="margin-left: 15%;">
                            <input type="text" class="form-control" name="email" placeholder="Email" style="width: 300;"
                                   required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12 row">
                        <!-- <label for="usr" class="col-sm-2" style="font-size:11px;">Password:</label> -->
                        <div class="col-sm-8" style="margin-left: 15%;">
                            <input type="password" class="form-control" name="password" placeholder="Password"
                                   style="width: 300;" required>
                        </div>
                    </div>
                </div>
                <div class="form-group  float-right">
                    <div class="col-sm-12 row">
                            <input type="submit" class=" btn-sm" value="Login">
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