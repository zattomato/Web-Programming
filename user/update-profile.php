<?php
 
session_start();
include "../php/db_conn.php";

if (isset($_POST["submit"]) $$ isset($_SESSION["id"])){
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $phonenumber = $_POST["phonenumber"];
    $homenumber = $_POST["homenumber"];

    $sql = "SELECT * FROM users WHERE id='{$_SESSION["id"]}'";
    $result = mysqli_query($conn, $sql);

    $sql2 = "UPDATE users SET fullname='$fullname', email='$email', phonenumber='$phonenumber', homenumber='$homenumber' WHERE id='{$_SESSION["id"]}'";
    $result2 = mysqli_query($conn, $sql2);

    if($result2) {
        echo "<script>alert('Profile updated successfully');</script>";
    } else {
        echo "<script>alert('Profile can not Updated.');</script>";
        echo  $conn->error;
    }
}

?>