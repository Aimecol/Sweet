<?php
include "../connection.php";
if (isset($_POST['send'])) {
    $fn = $_POST['fn'];
    $ln = $_POST['ln'];
    $adr = $_POST['adrs'];
    $ph = $_POST['phn'];
    $email = $_POST['imal'];
    $user = $_POST['user'];
    $pas = $_POST['pas'];
    $ins = "insert into customers(customer_id,email,password,first_name,last_name,address,phone_number,username)
     values(null,'$email','$pas','$fn','$ln','$adr','$ph','$user')";
    $query = mysqli_query($con, $ins);
    if ($query == true) {
        echo '<script>
            alert("Account created, please go back to log into your account");
        </script>';
        include 'login.html';
    } else {
        echo "data are not inserted";
    }
}
