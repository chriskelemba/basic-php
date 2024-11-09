<?php
include("connection.php");

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["reg"])) {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    $confirmPassword = trim($_POST["confirm_password"]);
    $userrole = trim($_POST["userrole"]);

    if(empty($username) || empty($password) || empty($confirmPassword)) {
        echo "All fields are required.";
    }
    elseif($password!==$confirmPassword) {
        echo "Passwords do not match.";
    }
    else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT); 
        $sql = "insert into reg(username, password, userrole) values (?, ?, ?)";

        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("sss", $username, $hashedPassword, $userrole);

        if ($stmt -> execute()) {
            header("location:signup_successful.html"); 
        }
        else {
            echo "The user has not been registered. ".$conn -> error();
        }
    }
}
?>