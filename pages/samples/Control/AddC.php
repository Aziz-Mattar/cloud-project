<?php
require 'conn.php';
$q      = "SELECT * from tmp";
$result = mysqli_query($conn, $q);
if (isset($_POST['Delete1'])) {
    $user    = $_POST['ad'];
    $q4       = "SELECT * from tmp where ID='" . $user . "'";
    $result2 = mysqli_query($conn, $q4);
    while ($row = mysqli_fetch_assoc($result2)) {
	$ID        = $row['ID'];
    $password  = $row['password'];
    $FirstName = $row['FirstName'];
    $LastName  = $row['LastName'];
    $Age       = $row['Age'];
    $Email     = $row['Email'];
    $Address   = $row['Address'];
    $City      = $row['City'];
    $Photo = $row['Photo'];
	$BirthdayCertificate = $row['birthday_certificate'];
	$IdentityCard = $row['identity_card'];
    	$q3 = "INSERT into personal_information(ID,password,    FirstName,    LastName,    Email,    Address,    City,    Age,    Photo,    birthday_certificate,    identity_card    )values('" . $ID . "','" . $password . "','" . $FirstName . "','" . $LastName . "','" . $Email . "','" . $Address . "','" . $City . "','" . $Age . "','" . $Photo . "','" . $BirthdayCertificate . "','" . $IdentityCard . "')";
        
        mysqli_query($conn, $q3);
    }
    $q2 = "DELETE from tmp where ID=" . "'$user'";
    mysqli_query($conn, $q2);
    //header("Location: Add.php");
    echo ("<script>location.href = 'Add.php';</script>");
    mysqli_close($conn);
}
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['ID'] . "</td>";
    echo "<td>" . $row['FirstName'] . " " . $row['LastName'] . "</td>";
    echo "<td>" . $row['password'] . "</td>";
    echo "<td><form method='post'>
           <input type='submit' class=' btn-sm btn-danger font-weight-bold'  name='Delete1' value='Add' >
           <input name='ad' type='hidden' value='" . $row['ID'] . "'>
           </form></td></tr>";
}
?>