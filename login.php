<?php
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    include("connection.php");

    $username = $_POST["username"];
    $password = $_POST["password"];
    $query = "select * from reg where username=?";

    $stmt = $conn -> prepare($query);
    $stmt -> bind_param("s", $username);
    $stmt -> execute();

    $result = $stmt -> get_result();
    if($result -> num_rows == 1) {
        $row = $result -> fetch_assoc();
        $hash = $row["password"];

        //username: won password: 123
        if(password_verify($password, $hash)) {
            session_start();
            $_SESSION['username'] = $username;
            header("location:patient.php");
        }
        else {
            echo "Invalid password.";
        }
    } else {
        echo "Username not found.";
    }
    $conn -> close();
    $stmt -> close();
}
?>