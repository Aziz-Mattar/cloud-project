<?php
session_start();
require 'conn.php';
if (isset($_POST['Add'])) {
    $ID          = $_SESSION['user'];
    $Year        = $_POST['Year'];
    $Semester    = $_POST['Semester'];

    $q2          = "SELECT COUNT(course_name) FROM grades WHERE ID = '" . $ID . "' and year = '" . $Year . "' and semester = '" . $Semester . "'";
    $result2     = mysqli_query($conn, $q2);
    $row2        = mysqli_fetch_row($result2);

    $TotalAmount = $row2[0] * 25 * 3;
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
?>