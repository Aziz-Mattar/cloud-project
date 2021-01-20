<?php
session_start();
require 'conn.php';
if (isset($_POST['Add'])) {
    $ID     = $_SESSION['user'];
    $Year     = $_POST['Year'];
    $Semester = $_POST['Semester'];
    $Course   = $_POST['Course'];

    $q        = "INSERT into grades(ID,    year,    semester,    course_name        )
    values('" . $ID . "','" . $Year . "','" . $Semester . "','" . $Course . "')";
    mysqli_query($conn, $q);
    /*$val   = 0;
    $conut = 0;
    for ($i = 1; $i < 5; $i++) {
        for ($j = 1; $j < 3; $j++) {
            $q2      = "SELECT ROUND(AVG(course_grade) ,2) FROM grades WHERE ID = '" . $ID . "' and year = '" . $i . "' and semester = '" . $j . "'";
            $q5      = "SELECT  course_grade FROM grades WHERE ID = '" . $ID . "' and year = '" . $i . "' and semester = '" . $j . "'";
            $result3 = mysqli_query($conn, $q5);
            $result2 = mysqli_query($conn, $q2);
            $row2    = mysqli_fetch_row($result2);
            $val     = ($val + $row2[0]);
            if (mysqli_num_rows($result3) > 0) {
                $conut++;
            }
        }
    }
    $q3 = "UPDATE personal_information set GPA = '" . ($val / $conut) . "' where ID = '" . $ID . "'";
    mysqli_query($conn, $q3);*/
}
?>