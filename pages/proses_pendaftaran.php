<?php
require "../config/koneksi.php";

$next = $_POST['next'];
$id_customer = $_POST['id_customer'];
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$nomor_plat = $_POST['nomor_plat'];
$type_mobil = $_POST['type_mobil'];
$no_antrian = $_POST['no_antrian'];
$id_jenis_service = $_POST['id_jenis_service'];
$nomor_plat = $_POST['nomor_plat'];
$total_biaya = $_POST['total_biaya'];
$tgl_pendaftaran = $_POST['tgl_pendaftaran'];
$jam_pendaftaran = $_POST['jam_pendaftaran'];
$keluhan = $_POST['keluhan'];

$cek = mysql_query("SELECT count(id_pendaftaran) as jumlah_daftar FROM pendaftaran WHERE jam_pendaftaran = '$jam_pendaftaran'");
$htg = mysql_fetch_array($cek);
$jumlahnya = $htg['jumlah_daftar'];
if ($jumlahnya != 0) {
?>
	<script language="JavaScript">
		alert('Maaf, Jam Yang Anda Inginkan Sudah Dibooking, Silahkan Pilih Jam Yang Lainnya');
		document.location = '../booking.php?p=home'
	</script>
	<?php
} else {

	if ($next > '10') {
	?>
		<script language="JavaScript">
			alert('Maaf, Antrian Hari Ini Sudah Penuh, Silahkan Daftar Kembali Di Hari Berikutnya');
			document.location = '../booking.php?p=home'
		</script>

	<?php
	} elseif ($next <= '10') {

		$queryy = "insert into customer(id_customer, nama, no_hp, alamat, nomor_plat, type_mobil) values('$id_customer','$nama', '$no_hp', '$alamat', '$nomor_plat', '$type_mobil')";
		$hasill = mysql_query($queryy);

		$query = "insert into pendaftaran(id_pendaftaran, no_antrian, id_customer, id_jenis_service, tgl_pendaftaran, jam_pendaftaran, total_biaya,keluhan, status) values(NULL,'$no_antrian', '$id_customer', '$id_jenis_service', '$tgl_pendaftaran', '$jam_pendaftaran', '$total_biaya','$keluhan', 'Pendaftaran')";
		$hasil = mysql_query($query);
	}
	//see the result
	if ($hasil) {
		echo '<script type="text/javascript">window.location.href = ' . "'https://wa.me/628123430652?text=" . "Halo, Saya mau booking service %0a%0a" . "*Nama :* " . $nama . "%0a*Alamat :* " . $alamat . "%0a*Nopol :* " . $nomor_plat . "%0a*Tipe Mobil :* " . $type_mobil . "%0a*Keluhan :* " . $keluhan . "%0a*Tanggal :* " . $tgl_pendaftaran . "%0a*Jam :* " . $jam_pendaftaran  . "'" . '</script>';
	?>
		<script language="JavaScript">
			alert('Pendaftaran Anda Berhasil Dilakukan, Silahkan Datang Ke Bengkel Kami Maksimal 10 Menit Dari Jam Pemesanan');
			document.location = '../booking.php?p=home'
		</script>
	<?php
	} else {
	?>
		<script language="JavaScript">
			alert('Pendaftaran Gagal Dilakukan');
			document.location = '../booking.php?p=home'
		</script>
<?php
	}
}
?>