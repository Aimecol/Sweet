<?php
include "connection.php";
if (isset($_POST['send']) && isset($_FILES['img'])) {
    $pname = $_POST['pn'];
    $pric = $_POST['prc'];

    $img_name = $_FILES['img']['name'];
    $img_size = $_FILES['img']['size'];
    $tmp_name = $_FILES['img']['tmp_name'];
    $error = $_FILES['img']['error'];


    if ($error == 0) {

        if ($img_size > 12500000) {
            echo "sorry, your file is too large.";
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);
            $allowed_exs = array("jpg", "jpeg", "png", "WEBP", "PNG");
            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                $im_upload_path = 'upload_image/' . $new_img_name;
                move_uploaded_file($tmp_name, $im_upload_path);
                //insert into to database
                $ql = "insert into products(product_id,pname,price,featured_image) values(null,'$pname','$pric','$im_upload_path')";
                $query = mysqli_query($con, $ql);
                if ($query) {
                    include "admin_panel.php";
                }
            } else {
                echo "You can't upload files of this type";
            }
        }
    } else {
        $sms = "Unknown error occurred!";
        header("location:add.php?error=$sms");
    }
} else {
    header("location:add.php");
}
