<?php
if (!isset($_SESSION)) {
    session_start();
    

}
?>

<?php

$connection = new mysqli('localhost', 'root', '', 'g1');

$error_flag = 0;
$result;
if ($connection->connect_error) {
    die('connection failed: ' . $connection->connect_error);
}

function secure($unsafe_data)
{
    return htmlentities($unsafe_data);
}

function login($email_id_unsafe, $password_unsafe)
{
    global $connection;

    $email_id = secure($email_id_unsafe);
    $password = secure($password_unsafe);
    $table = 'users';
    $sql = "SELECT COUNT(*) FROM $table WHERE email = '$email_id' AND password = '$password';";

    $result = $connection->query($sql);

    $num_rows = (int)$result->fetch_array()['0'];

    if ($num_rows > 1) {
        //send email to sysadmin that my site has been hacked
        return 0;
    } elseif ($num_rows == 0) {
        echo status('no-match');

        return 0;
    } else {

        $sql = "SELECT * FROM users WHERE email = '$email_id';";


        $result = $connection->query($sql)->fetch_array();

        
        $user_id = $result['id'];
        $fullname = $email_id;
        $_SESSION['first_name'] = $email_id;
        $_SESSION['user_id'] = $user_id;
        $_SESSION['user-type'] = $result['type'];

        echo "<div class='alert alert-success'> <strong>Well done!</strong> Logged In</div>";
        $_SESSION['username'] = $email_id;

    }

    return 1;
}

function registerPatient($email_id_unsafe, $password_unsafe, $first_name_unsafe, $last_name_unsafe, $address_unsafe, $age_unsafe, $phone_unsafe, $table = 'patients')
{
   
    global $connection, $error_flag,$sql,$sql1;

    $email = secure($email_id_unsafe);
    $password = secure($password_unsafe);
    $first_name = secure($first_name_unsafe);
    $last_name = secure($last_name_unsafe);
    $address = secure($address_unsafe);
    $age = secure($age_unsafe);
    $phone = secure($phone_unsafe);

    $patient=5;


    $sql = "INSERT INTO patients (firstname,lastname,address,phone_no,email) VALUES ('$first_name','$last_name','$address','$phone','$email');";

    $sql1 = "INSERT INTO users ( email, password,firstname,lastname,type,phone,status)  VALUES('$email','$password','$first_name','$last_name',$patient,'$phone',1);";


    if ($connection->query($sql1) === true && $connection->query($sql) === true) {
        echo status('record-success');
    } else {
        echo status('record-fail');
    }

}


function registerStaff()
{
    global $connection, $error_flag, $sql, $sql1;

    $email = $_POST['remail'];
    $password = $_POST['rpassword'];
    $first_name = $_POST['rfirstname'];
    $last_name = $_POST['rlastname'];
    $address = $_POST['raddress'];
    $phone = $_POST['rphone'];
    $usertype = $_POST['rusertype'];
    $speciality = $_POST['speciality'];
    $time = $_POST['time'];
    $ID= $_POST['ridnumber'];
    $fullname = $first_name . ' ' . $last_name;

    $nurse = 1;
    $doctor = 2;
    $receptionist = 3;
    $admin = 4;
    $patient = 5;


    if ($usertype == 1) {
        $sql = "INSERT INTO nurse (fullname,email,phone)VALUES ('$fullname','$email','$phone' );";
        $sql1 = "INSERT INTO users ( email, password,firstname,lastname,type,phone,idnumber,status)  VALUES('$email','$password','$first_name','$last_name',$nurse,'$phone','$ID',1);";
    } elseif ($usertype == 2) {
        $sql = "INSERT INTO doctors (email,phone,fullname,speciality,time) VALUES ('$email','$phone', '$fullname','$speciality','$time' );";
        $sql1 = "INSERT INTO users ( email, password,firstname,lastname,type,phone,idnumber,status)  VALUES('$email','$password','$first_name','$last_name',$doctor,'$phone','$ID',1);";
    } elseif ($usertype == 3) {
        $sql = "INSERT INTO receptionist (email,fullname, phone) VALUES ('$email', '$fullname','$phone');";
        $sql1 = "INSERT INTO users ( email, password,firstname,lastname,type,phone,idnumber,status)  VALUES('$email','$password','$first_name','$last_name','$receptionist','$phone','$ID',1);";
    }elseif ($usertype == 4) {
        $sql1 = "INSERT INTO users ( email, password,firstname,lastname,type,phone,idnumber,status)  VALUES('$email','$password','$first_name','$last_name','$admin','$phone','$ID',1);";
    }elseif ($usertype == 5) {

        $sql = "INSERT INTO patients (firstname,lastname,address,phone_no,email) VALUES ('$first_name','$last_name','$address','$phone','$email');";
        $sql1 = "INSERT INTO users ( email, password,firstname,lastname,type,phone,idnumber,status)  VALUES('$email','$password','$first_name','$last_name','$patient','$phone','$ID',1);";
    }

    // $connection->query($sql);
    // $connection->query($sql1);


    if ($connection->query($sql1) === true && $connection->query($sql) === true) {
        echo status('record-success');
    } else {
        echo status('record-fail');
    }


}

function status($type, $data = 0)
{
    $success = "<div class='alert alert-success'> <strong>Done!</strong>";
    $fail = "<div class='alert alert-danger'><strong>Sorry!</strong>";
    $end = '</div>';

    switch ($type) {
        case 'record-success':
            return "$success New record created successfully! $end";
            break;
        case 'record-fail':
            return "$fail New record creation failed. $end";
            break;
        case 'record-dup':
            return "$fail Duplicate record exists. $end";
            break;
        case 'no-match':
            return "$fail Record did not match. $end";
            break;
        case 'con-failed':
            return "$fail connection Failed! $end";
            break;
        case 'appointment-success':
            return "$success Your appointment is booked successfully! Your appointment no is $data $end";
            break;
        case 'appointment-fail':
            return "$fail Failed to book your appointment Failed! $end";
            break;
        case 'update-success':
            return "$success New record updated successfully! $end";
            break;
        case 'update-fail':
            return "$fail Failed to update data! $end";
            break;
        case 'user-delete':
            return "$success User Deleted! $end";
            break;
        case 'user-update':
            return "$success User Updated! $end";
            break;
        default:
            // code...
            break;
    }
}


function appointment_booking()
{
    global $connection;
    $patient_id =$_POST['user'];
    $specialist = $_POST['specialist'];
    $medical_condition = $_POST['apCondition'];
   
    $sql = "INSERT INTO appointments (patient_id,speciality,medical_condition) VALUES ($patient_id, '$specialist', '$medical_condition')";

    if ($connection->query($sql) === true) {
        echo status('appointment-success', $connection->insert_id);
    } else {
        echo status('appointment-fail');
        echo 'Error: ' . $sql . '<br>' . $connection->error;
    }
}



function getPatientsFor($doctor)
{
    global $connection;

    $sql = "SELECT d.id FROM doctors d LEFT JOIN users u ON d.email = u.email WHERE u.id='$doctor'";
    $result = $connection->query($sql)->fetch_array();
    $speciality = $result['id'];
    return $connection->query("SELECT 
                                a.appointment_no AS appointment_no,
                                concat(u.firstname ,' ' ,u.lastname) AS full_name ,
                                medical_condition, 
                                concat(m.type ,'- ','DR.',d.fullname) AS dcotor,
                                u.phone AS phone
                                FROM appointments a 
                                LEFT JOIN users u ON a.patient_id= u.id 
                                LEFT JOIN doctors d ON a.speciality = d.id 
                                LEFT JOIN medicine_types m ON d.speciality = m.id
                                WHERE 	a.speciality ='$speciality' ORDER BY a.appointment_no");
}

function getAllAppointments()
{
    global $connection;

    return $connection->query('SELECT appointment_no, full_name,speciality, medical_condition FROM patient_info, appointments where patient_info.patient_id = appointments.patient_id GROUP BY appointment_no');
}

function getAllPatientDetail($appointment_no)
{
    global $connection;

    return $connection->query("SELECT appointment_no, full_name, dob, phone_no, address, medical_condition FROM patient_info, appointments where appointment_no=$appointment_no AND patient_info.patient_id = appointments.patient_id;");
}


// function appointment_status($appointment_no_unsafe)
// {
//     global $connection;

//     $appointment_no = secure($appointment_no_unsafe);
//     $i = 0;

//     $result = $connection->query("SELECT doctors_suggestion FROM appointments WHERE appointment_no=$appointment_no;");
//     if ($result === false) {
//         return 0;
//     } else {
//         ++$i;
//     }

//     $result = $connection->query('SELECT payment_amount FROM appointments WHERE appointment_no=appointment_no;');
//     if ($result->num_rows == 1) {
//         ++$i;
//     }

//     return $i;
// }

// function delete($table, $id_unsafe)
// {
//     global $connection;

//     $id = secure($id_unsafe);

//     return $connection->query("DELETE FROM $table WHERE email='$id';");
// }

// function getListOfEmails($table)
// {
//     global $connection;

//     return $connection->query("SELECT email FROM $table;");
// }


function checkUser($email)
{


    $sql;
    global $connection;

    $sql = "SELECT email,type FROM users WHERE email='$email'";
    $result = $connection->query($sql)->fetch_array();
    $email = $result['email'];
    $type = $result['type'];

    // admin
    if ($email == true && $type == 4) {
        echo '<script type="text/javascript">window.location = "Admin/starter.php"</script>';
    } //doctor
    elseif ($email == true && $type == 2) {
        echo '<script type="text/javascript">window.location = "patient_info.php"</script>';

    } // nurse
    elseif ($email == true && $type == 1) {
        echo '<script type="text/javascript">window.location = "all_apointments.php"</script>';

    } // receptionist
    elseif ($email == true && $type == 3) {
        echo '<script type="text/javascript">window.location = "all_apointments.php"</script>';

    } // patients
    elseif ($email == true && $type == 5) {
        echo '<script type="text/javascript">window.location = "add_patient.php"</script>';

    }


}

// function noAccessIfNotLoggedIn()
// {
//     if (!isset($_SESSION['user-type'])) {
//         echo '<script type="text/javascript">window.location = "index.php"</script>';
//     }
// }

if (isset($_POST['deleteEmployee'])) {
    $eid = $_POST['emp_id'];

    $sql = "Update  users SET status = 0 where id='$eid'";

    if ($connection->query($sql) === true) {
        echo status('user-delete');
        echo '<script type="text/javascript">window.location = "Admin/view.php"</script>';
    } else {
        echo status('record-fail');
        echo '<script type="text/javascript">window.location = "Admin/view.php"</script>';
    }

}

if (isset($_POST['fetchEmployee'])) {
    $employee = array();
    $eid = $_POST['emp_id'];

    $sql = "SELECT *  FROM users WHERE id ='$eid' and status = 1";

    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $employee[0] = $row['id'];
            $employee[1] = $row['firstname'];
            $employee[2] = $row['lastname'];
            $employee[3] = $row['email'];
            $employee[4] = $row['phone'];
            $employee[5] = $row['idnumber'];
        }

    }

    $_SESSION["employeeData"] = $employee;
    header("Location: Admin/edit_user.php");

}

function updateUser()
{
    $id = $_POST['id'];
    $email = $_POST['email'];
    $phone_no = $_POST['mobile'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $idnumber = $_POST['idnumber'];

    $password = $_POST['password'];

    if ($password != null && $password != '') {
        $sql = "UPDATE users SET email='$email',password='$password' ,firstname='$fname',lastname='$lname',idnumber='$idnumber' WHERE id='$id'";

    } else {
        $sql = "UPDATE users SET email='$email',firstname='$fname',lastname='$lname',idnumber='$idnumber' WHERE id='$id'";
    }

    global $connection;
    if ($connection->query($sql) === true) {
        echo status('record-success');
        echo '<script type="text/javascript">window.location = "view.php"</script>';
    } else {
        echo '<script type="text/javascript">window.location = "view.php"</script>';
    }
}

function getMedicineTypes()
{
    global $connection;
    $sql = "SELECT concat(m.type,'-',d.fullname) as doctor,d.id FROM doctors d  left join  medicine_types m on d.speciality = m.id GROUP BY d.id";
    $result = $connection->query($sql);
    return $result;
}

function getPatients()
{
    global $connection;


        return $connection->query("SELECT 
                                a.appointment_no AS appointment_no,
                                concat(u.firstname ,' ' ,u.lastname) AS full_name ,
                                medical_condition, 
                                concat(m.type ,'- ','DR.',d.fullname) AS dcotor,
                                u.phone AS phone
                                FROM appointments a 
                                LEFT JOIN users u ON a.patient_id= u.id 
                                LEFT JOIN doctors d ON a.speciality = d.id 
                                LEFT JOIN medicine_types m ON d.speciality = m.id
                                ORDER BY a.appointment_no");
}



function complaints()
{
    global $connection,$error_flag,$sql;

    $username = $_POST['rusername'];
    $email = $_POST['remail'];
    $number = $_POST['rnumber'];
    $comment = $_POST['rcomment'];


    $sql= "INSERT INTO complaints (username,email,number,comment) VALUES ('$username','$email','$number','$comment');";

    if ($connection->query($sql) === true) {
        echo status('record-success');
    } else {
        echo status('record-fail');
    }
    
}


function getDoctors()
{
    global $connection;
    $sql = "SELECT * FROM doctors";
    $result = $connection->query($sql);
    return $result;
}

if (isset($_POST['fetchAppointments'])) {
    $employee = array();
    $app_no = $_POST['app_no'];


    $sql = "SELECT *  FROM appointments WHERE appointment_no ='$app_no'";


    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            $appointment[0] = $row['appointment_no'];
            $appointment[1] = $row['speciality'];
            $appointment[2] = $row['medical_condition'];
        }

    }

    $_SESSION["appointmentData"] = $appointment;

    header("Location: edit_appointment.php");

}

function updateAppointment()
{
    $id = $_POST['app_no'];
    $condition = $_POST['apCondition'];
    $specialist = $_POST['specialist'];


    $sql = "UPDATE appointments SET speciality='$specialist',medical_condition='$condition' WHERE appointment_no='$id'";

    global $connection;
    if ($connection->query($sql) === true) {
        echo status('record-success');
        echo '<script type="text/javascript">window.location = "all_apointments.php"</script>';
    } else {
        echo '<script type="text/javascript">window.location = "all_apointments.php"</script>';
    }
}


?>
