<?php
session_start();
include "../connection.php";
if (isset($_REQUEST['send'])) {
    $us = stripslashes(mysqli_real_escape_string($con, $us = $_REQUEST['user']));
    $pas = stripslashes(mysqli_real_escape_string($con, $pas = $_REQUEST['pas']));
    $us = htmlspecialchars($us);
    $pas = htmlspecialchars($pas);
    $se = "select*from admins where username='$us' and password='$pas'";
    $query = mysqli_query($con, $se);
    $row = mysqli_fetch_array($query);
    if ($row) {
        $_SESSION['username'] = "1";
        $_SESSION['password'] = "1";
        header("location:../admin_panel.php");
    } else {
        $se = "select * from customers where username='$us' and password='$pas'";
        $query = mysqli_query($con, $se);
        $rown = mysqli_fetch_array($query);
        if ($rown) {
            $_SESSION['username'] = "1";
            $_SESSION['password'] = "1";
            header("location:../services.html");
        } else {
            echo "invalid password and user name";
        }
    }
}
