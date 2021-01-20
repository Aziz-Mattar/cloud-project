<?php
require 'conn.php';
if (isset($_POST['View'])) {
    header("Location: otherPage.php");
}
$q      = "SELECT ID FROM personal_information";
$result = mysqli_query($conn, $q);
while ($row = mysqli_fetch_assoc($result)) {
    echo "<option value=" . $row['ID'] . ">" . $row['ID'] . "</option>";
}
?>