<?php
require 'conn.php';
if (isset($_POST['Add'])) {
    $ID          = $_POST['ID'];
    $Year        = $_POST['Year'];
    $Semester    = $_POST['Semester'];
    $TotalAmount = $_POST['Total'];
    $PaidAmount  = $_POST['Paid'];
    $StillTOPaid = $TotalAmount - $PaidAmount;
    $q           = "INSERT into financial_data(ID,    Year,    Semester,    total_amount,    paid_amount,    Remained_amount)
    values('" . $ID . "','" . $Year . "','" . $Semester . "','" . $TotalAmount . "','" . $PaidAmount . "','" . $StillTOPaid . "')";
    mysqli_query($conn, $q);
    $q2      = "SELECT SUM(Remained_amount) FROM financial_data WHERE ID = '" . $ID . "'";
    $result2 = mysqli_query($conn, $q2);
    $row2    = mysqli_fetch_row($result2);
    $q3      = "UPDATE personal_information set total_Remained = '" . $row2[0] . "' where ID = '" . $ID . "'";
    mysqli_query($conn, $q3);
}
$q      = "SELECT ID FROM personal_information";
$result = mysqli_query($conn, $q);
while ($row = mysqli_fetch_assoc($result)) {
    echo "<option value=" . $row['ID'] . ">" . $row['ID'] . "</option>";
}
?>