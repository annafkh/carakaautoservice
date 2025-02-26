<?php
require_once("config/koneksi_pel.php");

$nama = $_POST['nama'];
$username = $_POST['username'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
$password = md5($_POST['password']);

$check_username = mysql_query("SELECT username_pel FROM pelanggan WHERE username_pel = '$username'");
$data = mysql_fetch_array($check_username);
// echo !empty($data['username_pel']);

if (empty($data['username_pel'])) {
    $query = mysql_query("INSERT INTO pelanggan (username_pel, password, nama, alamat, hp, status) VALUES ('$username', '$password', '$nama', '$alamat', '$telp', 1)");
    // echo $query;
    if ($query) {

?>
        <script language="JavaScript">
            alert('Pendaftaran Anda Berhasil Dilakukan');
            document.location = './logboking.php'
        </script>
    <?php
    } else {

    ?>
        <script language="JavaScript">
            alert('Pendaftaran Gagal Dilakukan');
            document.location = './daftar.php'
        </script>
    <?php }
} else { ?>
    <script language="JavaScript">
        alert('Username Sudah digunakan, gunakan username lain');
        document.location = './daftar.php'
    </script>
<?php } ?>


// echo $nama, $username, $telp, $alamat, $password;