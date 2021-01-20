<?php 
require 'conn.php';
$ID     = $_POST['BirthdayC'];
$q      = "SELECT birthday_certificate from personal_information WHERE ID = '" . $ID . "'";
$result = mysqli_query($conn, $q);
$row    = mysqli_fetch_assoc($result);
echo "<center><img style='-webkit-user-SELECT: none;margin: auto;' src='images/birth/".$row['birthday_certificate']."'></center>";
?>