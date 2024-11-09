<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
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
            .container h1 {
                text-align: center;
            }
            .container table {
                width: 100%;
            }
            .container td {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <form action="patient.php" class="button">
                <button class="button">Home</button>
            </form>
            <h1>Scheduled Appointments</h1>
            <?php
            include("connection.php");

            function displayAppointment($conn) {
                $sql = "select * from appointment";
                $result = $conn -> query($sql);

                if ($result -> num_rows > 0) {
                    echo "<table>";
                    echo "<tr>";
                    echo "<th>ID</th>";
                    echo "<th>Patient Name</th>";
                    echo "<th>Date</th>";
                    echo "<th>Time</th>";
                    echo "</tr>";
                    
                        while ($rows = $result -> fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>{$rows['id']}</td>";
                            echo "<td>{$rows['patient']}</td>";
                            echo "<td>{$rows['date']}</td>";
                            echo "<td>{$rows['time']}</td>";
                            echo "</tr>";
                        }
                    }
                    else {
                        echo "No tasks found.";
                    }
            }

            echo displayAppointment($conn);
            ?>
        </div>
    </body>
</html>