<?php
session_start();
if (!isset($_SESSION['username_pel'])) {
  header('location: index.php');
} else {
  $username_pel = $_SESSION['username_pel'];
}
require_once 'koneksi_pel.php';
$query = mysql_query("SELECT * FROM pelanggan WHERE username_pel = '$username_pel'");
$hasil = mysql_fetch_array($query);
