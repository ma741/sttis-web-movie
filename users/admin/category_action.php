<?php
include "../../config.php";
date_default_timezone_set("Asia/Jakarta");


$name = $_POST['name'];

$date = date('Y-m-d  H:i:s');


// echo "$name <br>";
// echo $date;


$query = mysqli_query($conn,"SELECT * FROM category_name WHERE name='$name'");

if (mysqli_num_rows($query) > 0) {

    echo "<script>alert('Nama kategori sudah ada'); document.location='category_add.php'</script>";

} else {

    mysqli_query($conn,"INSERT INTO category_name VALUES('','$name','$date') ");
    header("location:category.php");
}

?>