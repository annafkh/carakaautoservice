<?php
include 'config/cek_pel.php';
error_reporting(0);
session_start();


$tgl_pendaftaran = $_GET['tgl_pendaftaran'];
$date = date_create($tgl_pendaftaran);
$date_oke =  date_format($date, "Y-m-d");
$queryy = mysql_query("SELECT no_antrian FROM pendaftaran WHERE tgl_pendaftaran = '$date_oke'");
$htg = mysql_num_rows($queryy);
$next = $htg + 1;
$data = json_encode($next);

echo $data;
