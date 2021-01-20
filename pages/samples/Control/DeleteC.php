<?php
require 'conn.php';
$q      = "SELECT * from personal_information";
$result = mysqli_query($conn, $q);
if (isset($_POST['Delete1'])) {
    $user = $_POST['del'];
    $q    = "DELETE from personal_information where ID=" . "'$user'";
    $q1   = "DELETE from grades where ID=" . "'$user'";
    $q2   = "DELETE from financial_data where ID=" . "'$user'";
    mysqli_query($conn, $q);
    mysqli_query($conn, $q1);
    mysqli_query($conn, $q2);
        echo ("<script>location.href = 'Delete.php';</script>");
    //header("Location: Delete.php");
    mysqli_close($conn);
}
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['ID'] . "</td>";
    echo "<td>" . $row['FirstName'] . " " . $row['LastName'] . "</td>";
    echo "<td>" . $row['City'] . "</td>";
    echo "<td><form method='post'>
           <input type='submit' class=' btn-sm btn-danger font-weight-bold'  name='Delete1' value='Delete' >
           <input name='del' type='hidden' value='" . $row['ID'] . "'>
           </form></td></tr>";
}
?>