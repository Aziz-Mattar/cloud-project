<?php 
require 'conn.php';
$ID     = $_POST['IdentityC'];
$q      = "SELECT identity_card from personal_information WHERE ID = '" . $ID . "'";
$result = mysqli_query($conn, $q);
$row    = mysqli_fetch_assoc($result);
echo "<center><img style='-webkit-user-SELECT: none;margin: auto;' src='images/id/".$row['identity_card']."'></center>";
?>