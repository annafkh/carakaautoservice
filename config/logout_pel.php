<?php
session_start();

unset($_SESSION['username_pel']);
session_unset();
session_destroy();

?>
<script>
    document.location.href = "../index.php"
</script>
<?
include "../index.php";
?> ?>