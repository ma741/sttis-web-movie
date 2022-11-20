<?php include("header.php")?>

<h3>Lupa Password</h3>

<?php 
if( isset( $_SESSION['email']) != '') {
    header("location:index.php");
    exit();
}

$err ="";
$sukses ="";
$email ="";

if( isset( $_POST['submit'])) {
    $email = $_POST['email'];
        if( $email == '' ) {
            $err = "Silahkan Masukan Email";
        } else{
            $sQueryLi = "select * from users where email = '$email'";
            $sQuery = mysqli_query( $koneksi, $sQueryLi);
            $sNum = mysqli_num_rows( $sQuery);

            if( $sNum < 1 ) {
                $err = "Email: <b>$email</b> tidak ditemukan";
            }
        }

        if( empty( $err)) {
            $tokenGantiPass = md5( rand( 0,1000));
            $judulEmail = "Ganti Password";
            $isiEmail = "Seseorang meminta untuk melakukan         perubahan password. Silahkan klik disini";
            $isiEmail .= url_dasar()."/forgotPassword.php?email=$email&kirimEmail( $email,$email,$judulEmail,$isiEmail);
            $sQueryLi = "update users set tokenGantiPass ='$tokenGantiPass' where email = '$email'"; 



        }
}
?>
<form action="" method="POST">
    <table>
        <tr>
            <td>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" value="<?php echo $email ?>">
            </td>
        </tr>
        <tr>
            <td>
                <label for="submit">Submit</label>
                <input type="submit" name="submit" id="submit" value="forgotPassword">
            </td>
        </tr>
    </table>
</form>