<?php
require_once("config/koneksi_pel.php");
error_reporting(0);
session_start();

$nama = $_POST['nama'];
$username_pel = $_POST['username_pel'];
$hp = $_POST['hp'];
$alamat = $_POST['alamat'];
$id_pelanggan = $_POST['id_pelanggan'];
if (!empty($_POST['password'])) {
    $pasword = md5($_POST['password']);
    $query = mysql_query("UPDATE pelanggan SET username_pel = '$username_pel', nama = '$nama', alamat = '$alamat', hp = '$hp', password = '$password' WHERE pelanggan.id_pelanggan = $id_pelanggan");
} else {

    $query = mysql_query("UPDATE pelanggan SET username_pel = '$username_pel', nama = '$nama', alamat = '$alamat', hp = '$hp' WHERE pelanggan.id_pelanggan = $id_pelanggan");
}

// echo $query;
if ($query) {
    $_SESSION['username_pel'] = $username_pel;
    // echo $_SESSION['username_pel'];
?>
    <script language="JavaScript">
        alert('Pendaftaran Anda Berhasil Dilakukan');
        document.location = './admin/profile.php'
    </script>
<?php
} else {
?>
    <script language="JavaScript">
        alert('Pendaftaran Gagal Dilakukan');
        document.location = './admin/profile.php'
    </script>
<?php } ?>

// echo $nama, $username_pel, $hp, $alamat, $password;