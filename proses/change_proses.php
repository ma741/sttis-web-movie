<?php
session_start();
include "../config.php";

$id = $_POST['id'];
$np = $_POST['np'];
$c_np = $_POST['c_np'];
$id_session = $_POST['id'];



function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$id = validate($_POST['id']);
$np = validate($_POST['np']);
$c_np = validate($_POST['c_np']);





if ($np !== $c_np) {
    echo "<script> alert('Konfirmasi password tidak cocok !'); window.location = '../change_password.php?id=$id_session'; </script>";

} else {
    // hashing the password
    $np = md5($np);
    $c_np = md5($c_np);

    echo $np;

    $sql = "SELECT password
              FROM users WHERE 
              id='$id' ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {

        $sql_2 = "UPDATE users SET password='$np' WHERE id='$id'";
        mysqli_query($conn, $sql_2);

        echo "<script> alert('Password Anda telah berhasil diubah'); window.location = '../login.php'; </script>";

        exit();
    } else {

        echo "<script> alert('Incorrect password !'); window.location = '../change_password.php?id=$id_session'; </script>";
        exit();
    }
}
