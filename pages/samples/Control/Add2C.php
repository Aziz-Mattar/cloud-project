<?php
require 'conn.php';
if (isset($_POST['Add'])) {
    $ID     = $_POST['ID'];
    $Course = $_POST['Course'];
    $Grade  = $_POST['Grade'];
    $q      = "UPDATE grades SET course_grade = '" . $_POST['Grade'] . "' WHERE ID = '" . $_POST['ID'] . "' and course_name =  '" . $_POST['Course'] . "'";
    mysqli_query($conn, $q);
    $val   = 0;
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
    mysqli_query($conn, $q3);
}
$q      = "SELECT ID FROM personal_information";
$result = mysqli_query($conn, $q);
while ($row = mysqli_fetch_assoc($result)) {
    echo "<option value=" . $row['ID'] . ">" . $row['ID'] . "</option>";
}
?>