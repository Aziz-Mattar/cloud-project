<?php
session_start();
require 'conn.php';
if (isset($_POST['remember-me'])) {
    setcookie("remember", $_POST['username'], time() + 3600);
}
if (isset($_POST['Login'])) {
    if ($stmt = $conn->prepare('SELECT password FROM admin WHERE username =?')) {
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($password);
            $stmt->fetch();
            if (md5($_POST['pass']) == $password) {
                $_SESSION['user']     = $_POST['username'];
                $_SESSION['user']     = $_POST['pass'];
                $_SESSION['loggedin'] = TRUE;
                header("Location: ../../index.php");
            } else {
                echo 'Incorrect password!';
            }
        } else {
            echo 'Incorrect username!';
        }
        $stmt->close();
    }
}
?>