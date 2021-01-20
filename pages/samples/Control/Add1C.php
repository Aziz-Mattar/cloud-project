<?php
require 'conn.php';
if (isset($_POST['Add'])) {
    $ID        = $_POST['ID'];
    $password  = $_POST['password'];
    $FirstName = $_POST['FirstName'];
    $LastName  = $_POST['LastName'];
    $Age       = $_POST['Age'];
    $Email     = $_POST['Email'];
    $Address   = $_POST['Address'];
    $City      = $_POST['City'];
    $target1   = "images/photo/" . basename($_FILES['Photo']['name']);
    $Photo     = $_FILES['Photo']['name'];
    move_uploaded_file($_FILES['Photo']['tmp_name'], $target1);
    $target2             = "images/birth/" . basename($_FILES['birthdayCertificate']['name']);
    $BirthdayCertificate = $_FILES['birthdayCertificate']['name'];
    move_uploaded_file($_FILES['birthdayCertificate']['tmp_name'], $target2);
    $target3      = "images/id/" . basename($_FILES['identityCard']['name']);
    $IdentityCard = $_FILES['identityCard']['name'];
    move_uploaded_file($_FILES['identityCard']['tmp_name'], $target3);
    $q = "INSERT into tmp(ID,password,    FirstName,    LastName,    Email,    Address,    City,    Age,    Photo,    birthday_certificate,    identity_card    )values('" . $ID . "','" . $password . "','" . $FirstName . "','" . $LastName . "','" . $Email . "','" . $Address . "','" . $City . "','" . $Age . "','" . $Photo . "','" . $BirthdayCertificate . "','" . $IdentityCard . "')";
    /**/
    mysqli_query($conn, $q);
    header('Location: 0-login.php');
}
?>