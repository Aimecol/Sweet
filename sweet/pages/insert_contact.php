<?php
include "connection.php";
if (isset($_POST['send'])) {
    $nam = $_POST['name'];
    $email = $_POST['email'];
    $com = $_POST['text'];
    $ins = "insert into reviews (review_id,name,email,comment)values(null,'$nam','$email','$com')";
    $query = mysqli_query($con, $ins);
    if ($query == 1) {
        echo '<script>alert("comment sent sucessfully")</script>';
        include 'contact.html';
    } else {
        echo "Data are not inserted";
    }
}
