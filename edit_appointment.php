<!DOCTYPE html>
<html>
    <head>
        <title>Appointment Management</title>
        <style>
            body {
                background-color: rgb(223, 223, 223);
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            }
            .container {
                background-color: white;
                width: 50%;
                padding: 30px;
                border-radius: 20px;
                margin: auto;
            }
            .button .button {
                background-color: rgb(16, 103, 175);
                color: white;
                padding: 15px;
                border-radius: 20px;
                border: none;
                width: 10%;
            }
            .button .button:hover {
                background-color: rgb(48, 121, 180);
                cursor: pointer;
            }
            form legend {
                text-align: center;
                font-size: 40px;
            }
            form label {
                font-size: 20px;
            }
            form input[type=text] {
                padding: 15px;
                border-radius: 10px;
                border: 1px solid black;
                width: 98%;
                margin-top: 2%;
                margin-bottom: 2%;
            }
            form input[type=date] {
                padding: 15px;
                border-radius: 10px;
                border: 1px solid black;
                width: 98%;
                margin-top: 2%;
                margin-bottom: 2%;
            }
            form input[type=time] {
                padding: 15px;
                border-radius: 10px;
                border: 1px solid black;
                width: 98%;
                margin-top: 2%;
                margin-bottom: 2%;
            }
            form select {
                padding: 5px;
                border-radius: 10px;
                border: 1px solid black;
                width: 30%;
                margin-left: 14%;
                margin-top: 2%;
                margin-bottom: 2%;
            }
            form input[type=submit] {
                background-color: rgb(16, 103, 175);
                color: white;
                padding: 15px;
                border-radius: 20px;
                border: none;
                width: 30%;
                margin-left: 34%;
                margin-top: 2%;
            }
            form input[type=submit]:hover {
                background-color: rgb(48, 121, 180);
                cursor: pointer;
            }
            form button[type=submit] {
                background-color: rgb(16, 103, 175);
                color: white;
                padding: 15px;
                border-radius: 20px;
                border: none;
                width: 15%;
                margin-top: 2%;
                margin-left: 1%;
            }
            form button[type=submit]:hover {
                background-color: rgb(48, 121, 180);
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <form action="patient.php" class="button">
                <button class="button">Home</button>
            </form>
            <form action="" method="post">
                <legend style="margin-bottom: 2%;">Update Appointment</legend>
                <label>Select Patient</label>
                <select name="patient">
                <option value=""></option>
                    <?php
                    include ("connection.php");

                    $sql = "select id, patient from appointment group by patient";
                    $result = $conn -> query($sql);

                    if($result -> num_rows > 0) {
                        while($rows = $result -> fetch_assoc()) {
                            echo "<option value='".$rows["id"]."'>".$rows["patient"]."</option>";
                        }
                    } else {
                        echo "<option value=''>No patients found.</option>";
                    }
                    $conn -> close();
                    ?>
                </select>
                <button type="submit" name="button">Edit Patient</button>
            </form>

            <?php
            include ("connection.php");

            if(isset($_POST["button"])) {
                $patient = $_POST["patient"];

                $selectSQL = "select * from appointment where id=$patient";
                $result = $conn -> query($selectSQL);

                if($result -> num_rows > 0) {
                    while($rows = $result -> fetch_assoc()) {
                        echo '<form action="update_appointment.php" method="post">';
                        echo '<legend style="margin-top: 5%;">Edit Patient Information</legend>';
                        echo '<label>Patient Name</label>';
                        echo '<br>';
                        echo '<input type="text" name="patient" required/>';
                        echo '<br>';
                        echo '<label>Appointment Date</label>';
                        echo '<br>';
                        echo '<input type="date" name="date" required/>';
                        echo '<br>';
                        echo '<label>Appointment Time</label>';
                        echo '<br>';
                        echo '<input type="time" name="time" required/>';
                        echo '<br>';
                        echo '<input type="submit" name="submit" value="Update Appointment"/>';
                        echo '</form>';
                }
            } else {
                    echo "Cannot select patient appointment. ".$stmt -> error();
                }
                $conn -> close();
            }
            ?>
        </div>
    </body>
</html>