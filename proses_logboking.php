<?php
error_reporting(0);
session_start();
require_once("config/koneksi_pel.php");
$username_pel = $_POST['username_pel'];
$password = md5($_POST['password']);
$cekuser = mysql_query("SELECT * FROM pelanggan WHERE username_pel = '$username_pel' and password='$password'");
$jumlah = mysql_num_rows($cekuser);
$hasil = mysql_fetch_array($cekuser);

if ($jumlah == 1 && $hasil['status'] == '1') {
	$_SESSION['id_pelanggan'] = $hasil['id_pelanggan'];
	$_SESSION['username_pel'] = $username_pel;
	$_SESSION['nama'] = $hasil['nama'];
	$_SESSION['alamat'] = $hasil['alamat'];
	$_SESSION['hp'] = $hasil['hp'];
?>
	<script language="JavaScript">
		document.location = 'booking.php?p=home'
	</script>

<?php
} else {
	// jika login salah //
?>
	<script language="JavaScript">
		alert('Username atau password Anda salah');
		document.location = 'logboking.php'
	</script><?php
				echo mysql_error();
			}
				?>