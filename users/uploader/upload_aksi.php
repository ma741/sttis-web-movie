<?php
include "../../config.php";
session_start();


date_default_timezone_set("Asia/Jakarta");

$email = $_POST['email'];
$cast = $_POST['cast'];
$title = $_POST['title'];
$gendre = $_POST['gendre'];
$visibilitas = $_POST['visibility'];
$about = $_POST['about'];

$created_date = date('Y-m-d');



// img
// ekstensi file yg boleh di upload
$ekstensi_diperbolehkan = array('png', 'jpg');
$namaImg = $_FILES['img']['name'];
$ukuranImg = $_FILES['img']['size'];
$tmpImg = $_FILES['img']['tmp_name'];
$x = explode('.', $namaImg);
$ekstensi = strtolower(end($x));
$errorImg = $_FILES['img']['error'];


// // Video
$ekstensiVideo = array("mp4", 'webm', 'mkv', 'flv');
$namaVideo = $_FILES['video']['name'];
$tmpVideo = $_FILES['video']['tmp_name'];
$errorVideo = $_FILES['video']['error'];
$ukuranVideo = $_FILES['video']['size'];
$video_ex = pathinfo($namaVideo, PATHINFO_EXTENSION);
$video_ex_lc = strtolower($video_ex);



if ($errorImg === 4) {
    echo "<script>
            alert('pilih gambar terlebih dahulu!');
                document.location='upload.php'
          </script>";

    return false;
}
if ($errorVideo === 4) {
    echo "<script>
            alert('pilih video terlebih dahulu!');
                document.location='upload.php'
          </script>";

    return false;
}


// uji jika ekstensi file yg di upload sesuai
if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
    // boleh upload file

    // jika ukuran file
    if ($ukuranImg < 1044070) {

        // lolos pengecekan, gambar siap diupload
        // generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensi;
        move_uploaded_file($tmpImg, 'files/' . $namaFileBaru);


        // VIDEO
        // cek jika ukurannya terlalu besar
        if ($ukuranVideo > 1000000000) {
            echo "<script>
				alert('ukuran video terlalu besar!');
                document.location='upload.php';
			  </script>";
            return false;
        }

        if (in_array($video_ex_lc, $ekstensiVideo)) {

            $new_video_name = uniqid("video-", true) . '.' . $video_ex_lc;

            $video_upload_path = 'files/' . $new_video_name;
            move_uploaded_file($tmpVideo, $video_upload_path);


            // echo "$email <br>";
            // echo "$title <br>";
            // echo "$gendre <br>";
            // echo "$visibilitas <br>";
            // echo "$about <br>";
            // echo "$created_date<br>";
            // echo "$namaFileBaru<br>";
            // echo "$new_video_name<br>";

            // id	url_img	url_video	title	about	date	gendre	visibility	user_uploader	
            $simpan = mysqli_query($conn, "INSERT INTO video_upload VALUES('','$namaFileBaru','$new_video_name','$cast','$title','$about','$created_date','$gendre','$visibilitas','$email')");

            // Now let's Insert the video path into database
            if ($simpan) {
                echo "<script>
                    alert('File berhasil di upload');
                    document.location='content.php';
                </script>";
            } else {
                echo "<script>
                    alert('Gagal mengupload file');
                    // document.location='upload.php';
                </script>";
            }
        } else {
            echo "<script>
                    alert('Gagal mengupload file');
                    document.location='upload.php';
                </script>";
        }
    } else {
        echo "<script>
                alert('Ukuran file terlalu besar ,Max 1mb');
                document.location='upload.php';
            </script>";
    }
} else {
    // ekstensi file yg di upload tidak sesuai
    echo "<script>
                alert('ekstensi file yg di upload tidak diperbolehkan');
                document.location='upload.php';
            </script>";
}
