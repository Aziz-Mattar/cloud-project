<?php
session_start();
require 'conn.php';
if (isset($_POST['remember-me'])) {
    setcookie("remember", $_POST['username'], time() + 3600);
}
if (isset($_POST['type'])) {
    if (isset($_POST['Login'])) {
        if ($_POST['type'] == 'admin') {
            if ($stmt = $conn->prepare('SELECT password FROM admin WHERE username =?')) {
                $stmt->bind_param('s', $_POST['username']);
                $stmt->execute();
                $stmt->store_result();
                if ($stmt->num_rows > 0) {
                    $stmt->bind_result($password);
                    $stmt->fetch();
                    if ($_POST['pass'] == $password) {
                        $_SESSION['user']     = $_POST['username'];
                        $_SESSION['pass']     = $_POST['pass'];
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
        } else {
            if ($stmt = $conn->prepare('SELECT password FROM personal_information WHERE ID =?')) {
                $stmt->bind_param('s', $_POST['username']);
                $stmt->execute();
                $stmt->store_result();
                if ($stmt->num_rows > 0) {
                    $stmt->bind_result($password);
                    $stmt->fetch();
                    if ($_POST['pass'] == $password) {
                        $_SESSION['user']     = $_POST['username'];
                        $_SESSION['pass']     = $_POST['pass'];
                        $_SESSION['loggedin'] = TRUE;
                        header("Location: ../../index2.php");
                    } else {
                        echo 'Incorrect password!';
                    }
                } else {
                    echo 'Incorrect username!';
                }
                $stmt->close();
            }
        }
    }
}
?>