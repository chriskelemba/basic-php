<?php
include("connection.php");

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $patient = trim($_POST["patient"]);
    $date = trim($_POST["date"]);
    $time = trim($_POST["time"]);

    $sql = "insert into appointment (patient, date, time) values (?, ?, ?)";

    $stmt = $conn -> prepare($sql);
    $stmt -> bind_param("sss", $patient, $date, $time);

    if($stmt -> execute()) {
        header("location:insert_successful.html");
    }
    else {
        echo "Patient has not been scheduled. ".$stmt -> error();
    }
    $conn -> close();
    $stmt -> close();
}
?>