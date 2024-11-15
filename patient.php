<?php
include("connection.php");
session_start();
if(!isset($_SESSION["username"])){
    header("location:patient.html");
} else {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Patient Management</title>
        <style>
            body {
                background-color: rgb(9, 61, 104);
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                margin: 0%;
            }
            header {
                padding: 5px;
            }
            header .login {
                float: right;
                padding: 5px;
                margin-top: 10px;
                margin-right: 20px;
            }
            header .login #form1 {
                margin-left: -25%;
            }
            header .login #form1 input[type=submit] {
                background-color: rgb(9, 61, 104);
                border: solid 5px rgb(16, 103, 175);
                color: white;
                padding: 10px;
                border-radius: 15px;
                width: 100%;
                margin-right: 40px;
                font-weight: bold;
            }
            header .login #form2 {
                position: relative;
                right: 0%;
                bottom: 45px;
                margin-left: -30%;
            }
            header .login #form2 input[type=submit] {
                background-color: rgb(16, 103, 175);
                border: solid 5px rgb(16, 103, 175);
                color: white;
                padding: 10px;
                border-radius: 15px;
                width: 100%;
                margin-right: 40px;
                font-weight: bold;
            }
            header .login #form2 input[type=submit]:hover {
                background-color: rgb(48, 121, 180);
                cursor: pointer;
                transition: 0.3s;
            }
            .navbar {
                background-color: rgb(16, 103, 175);
                padding: 5px;
                margin: 0%;
                position: relative;
                z-index: 1;
                width: 100%;
            }
            .navbar ul {
                list-style-type: none;
                overflow: hidden;
                width: 100%;
                padding: 0%;
                margin: 0%;
            }
            .navbar ul li {
                float: left;
                width: 17.8%;
                padding: 20px;
            }
            .navbar ul li a {
                text-decoration: none;
                text-align: center;
                color: white;
                display: block;
                padding: 5px;
                width: 70%;
                margin: auto;
                border-radius: 20px;
                position: relative;
                top: -10px;
            }
            .navbar ul li a:hover {
                background-color: rgb(76, 133, 180);
                cursor: pointer;
                transition: 1s;
            }
        </style>
    </head>
    <body>
        <header>
            <div class="login">
                <form action="" method="get" id="form1">
                    <input type="submit" name="Submit" value="Easter Egg"/>
                </form>
                <form action="logout.php" method="get" id="form2">
                    <input type="submit" name="Submit" value="Log out"/>
                </form>
            </div>
            <h1 style="color: rgb(223, 223, 223); text-align: center; margin-left: 200px;">Patient Management System</h1>
        </header>
        <div class="navbar">
            <ul>
                <li><a href=""></a></li>
                <li><a href="insert_appointment.html">Schedule Appointment</a></li>
                <li><a href="view_appointment.php">View Appointments</a></li>
                <li><a href="edit_appointment.php">Update Appointment</a></li>
                <li><a href=""></a></li>
            </ul>
        </div>
        <img src="graphic.jpg" width="100%"/>
    </body>
</html>
<?php
}
?>