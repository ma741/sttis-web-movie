<?php
require('../config.php');

session_start();



$email       = $_POST['email'];
$password    = md5( $_POST['password']);


$sql = "SELECT * FROM users where email = '$email' and password='$password'";
$query = mysqli_query($conn, $sql);

// jika email tidak ditemukan 
if (mysqli_num_rows($query) == 0) {

    header("location: ../login.php?pesan=no_email");
} else {

    $users = mysqli_fetch_assoc($query);
    // echo $users['id'];
    $id = $users['id'];


    if ($users['is_verified'] == 1) {
            

        // var_dump($users);

        $role_name = $users['role_name'];
        // var_dump($role_name);

        if($role_name == 'Viewer'){
            $_SESSION['id'] = $id;
            header('location:../users/viewer/index.php');

        }else if($role_name == 'Uploader'){
            $_SESSION['id'] = $id;
            header('location:../users/uploader/index.php');

        }else if($role_name == 'Admin'){
            $_SESSION['id'] = $id;
            header('location:../users/admin/index.php');
        }

    } 
    else {
        // echo "Anda belum verifikasi email !";
        header("location: ../login.php?pesan=no_ver");
    }

    
}
