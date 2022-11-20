<?php include("header.php")?>

<?php 
if( isset( $_SESSION['email']) != '') {
    header("location:index.php");
    exit();
}

$err ="";
$sukses ="";

$email = $_GET['email'];
$token = $_GET['token'];

if( $token == '' or $email == '') {
    $err = "Link tidak valid. Email dan token tidak tersedia.";
} else{ 
    $sQueryLi ="select * from users where email ='$email' and tokenGantiPass = '$token'";
    $sQuery = mysqli_query( $koneksi,$sQueryLi);
    $sNum = mysqli_num_rows( $sQuery);

    if( $sNum < 1) {
        $err .= "Link tidak valid. Email dan token tidak sesuai"
    }
}

if( isset( $_POST['submit'])) {

}
?>

<?php if( $err){ echo " <div class='error'>$err</div>"; } ?>
<?php if( $sukses){ echo " <div class='sukses'>$sukses</div>"; } ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

<!-- Link CSS -->
    <link rel="stylesheet" href="style1.css" />

    <title>change pasword</title>
  </head>
  <body>

<!-- Form Login -->
    <div class="global-container" >
      <div class="card password-form">
        <div class="card-body">
          <h1 class="card-title text-center">Change Password</h1>
        </div>
        <div class="card-text">
          <form action="" method="post"> 
            <div class="mb-3">
            <label for="oldPassword text-center" class="form-label">Old password</label>
              <input type="password" class="form-control" id="oldpassword" />
            <div class="mb-3">
              <label for="newPassword" class="form-label">New Password</label>
              <input type="password" class="form-control" id="newpassword" />
            </div>
            <div class="mb-3">
              <label for="repeatPassword" class="form-label">Repeat Password</label>
              <input type="password" class="form-control" id="repeatpassword" />
            </div>
            <button type="submit" class="btn btn-secondary">Cancel</button>
            <button type="submit" class="btn btn-secondary ms-3">Save Change</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
