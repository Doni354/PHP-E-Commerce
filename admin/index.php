<?php
// Alamat URL halaman tujuan
$tujuan = "admin_login.php";

// Melakukan pengalihan
header("Location: $tujuan");
exit; // Penting untuk menghentikan eksekusi kode setelah pengalihan
?>
