
<?php




require("../config.php");

date_default_timezone_set("Asia/Jakarta");




use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "../assets/library/Exception.php";
require_once "../assets/library/PHPMailer.php";
require_once "../assets/library/SMTP.php";

$fullname = $_POST['fullname'];
$username = $_POST['username'];
$date_of_brith = $_POST['date_of_birth'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = md5( $_POST['password']);
$account_status = $_POST['account_status'];
$address = $_POST['address'];
$role_name = $_POST['role_name'];
$date_of_birth = $_POST['date_of_birth'];

$status = "not_active";

$created_date = date('Y-m-d');

$code = md5($email . date("Y-m-d"));






$query = mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");

if (mysqli_num_rows($query) > 0) {

    echo "<script>alert('Email already registered'); document.location='../register.php'</script>";

} else {


    // ekstensi file yg boleh di upload
    $ekstensi_diperbolehkan = array('png', 'jpg');
    // untuk mendapatkan nama file yg di upload
    $nama = $_FILES['foto']['name'];
    // nama.file.jpg
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    // menentukan ukuran file
    $ukuran = $_FILES['foto']['size'];
    // temporary file yg akan di upload (tmp)
    $file_tmp = $_FILES['foto']['tmp_name'];
    $error = $_FILES['foto']['error'];

    // cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>
				alert('pilih gambar terlebih dahulu!');
                    document.location='../register.php'
			  </script>";

        return false;
    }

    // *tambahkan pengecekan jika username dan email sudah ada maka tidak dapat disimpan
    $cek_data = mysqli_query($conn, "select * from users where username = '$username' or email = '$email'");

    if($cek_data->num_rows > 0){
        echo "<script>alert('Username atau Email sudah ada!');document.location='../register.php'</script>";
    } 
    else{
        // uji jika ekstensi file yg di upload sesuai
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            // boleh upload file

            // jika ukuran file
            if ($ukuran < 1044070) {

                // lolos pengecekan, gambar siap diupload
                // generate nama gambar baru
                $namaFileBaru = uniqid();
                $namaFileBaru .= '.';
                $namaFileBaru .= $ekstensi;

                move_uploaded_file($file_tmp, '../assets/file/' . $namaFileBaru);

                // simpan data ke dalam database
                $simpan = mysqli_query($conn,"INSERT INTO users VALUES('','$namaFileBaru','$fullname','$phone','$email','$address','$username','$password','$status','$account_status','$date_of_birth','$role_name','$created_date','$code','')");

                if ($simpan) {
                    echo "<script>
                        alert('File berhasil di upload');
                        document.location='../login.php';
                    </script>";
                } else {
                    echo "<script>
                        alert('Gagal mengupload file');
                        document.location='../register.php';
                    </script>";
                }

            } else {
                echo "<script>
                        alert('Ukuran file terlalu besar ,Max 1mb');
                        document.location='../register.php';
                    </script>";
            }

            $mail = new PHPMailer(true);


            //Enable SMTP debugging. 
            // $mail->SMTPDebug = 2;
            //Set PHPMailer to use SMTP.
            $mail->isSMTP();
            //Set SMTP host name                          
            $mail->Host = "tls://smtp.gmail.com"; //host mail server
            //Set this to true if SMTP host requires authentication to send email
            $mail->SMTPAuth = true;
            //Provide username and password     
            $mail->Username = "pudinmah4@gmail.com";   //nama-email smtp          
            $mail->Password = "vecxkoyfcrkfadgz";           //password email smtp
            //If SMTP requires TLS encryption then set it
            $mail->SMTPSecure = "tls";
            //Set TCP port to connect to 
            $mail->Port = 587;

            // pengirim
            $mail->From = "pudinmah4@gmail.com"; //email pengirim
            $mail->FromName = "CAMPUS CINEMA"; //nama pengirim

            // penerima
            $mail->addAddress($_POST['email'], $_POST['username']); //email penerima

            $mail->isHTML(true);

            $mail->Subject = "verification Account - nama website"; //subject

            $body = "Hi, " . $username . "<br>Plase verif your before access our website : <br> http://localhost/VIDOE/proses/confirmEmail.php?code=" . $code;
            $mail->Body    = $body; //isi email
            $mail->AltBody = "CAMPUS CINEMA"; //body email (optional)


            if (!$mail->send()) {
                echo "Mailer Error: " . $mail->ErrorInfo;
            } else {
                echo "Register successfully, please login !";
                header("location:../login.php?pesan=please_login");
            }


        } else {
            // ekstensi file yg di upload tidak sesuai
            echo "<script>
                        alert('ekstensi file yg di upload tidak diperbolehkan');
                        document.location='../register.php'
                    </script>";
        }
    }

//     


    
}