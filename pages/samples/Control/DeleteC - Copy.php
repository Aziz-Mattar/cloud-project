<?php
require 'conn.php';
$q      = "SELECT * from grades";
$result = mysqli_query($conn, $q);
if (isset($_POST['Delete1'])) {
    $user = $_POST['del'];

    $q1   = "DELETE from grades where course_name=" . "'$user'";


    mysqli_query($conn, $q1);

        echo ("<script>location.href = 'Delete - Copy.php';</script>");
    //header("Location: Delete.php");
    mysqli_close($conn);
}
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['course_name'] . "</td>";
    echo "<td>" . $row['semester'] . "</td>";
    echo "<td>" . $row['year'] . "</td>";
    echo "<td><form method='post'>
           <input type='submit' class=' btn-sm btn-danger font-weight-bold'  name='Delete1' value='Delete' >
           <input name='del' type='hidden' value='" . $row['course_name'] . "'>
           </form></td></tr>";
}
?>