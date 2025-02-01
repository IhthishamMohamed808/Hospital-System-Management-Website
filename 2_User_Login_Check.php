<?php
    session_start();
    $un = $_POST['txt-uname'];
    $pw = $_POST['txt-pw'];

    include "conn.php";

    $sql = "SELECT * FROM login WHERE username='$un' AND password='$pw' ";
    $result = mysqli_query ($conn, $sql);

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        if ($row['role'] === 'admin') {

            //Admin Login

            header("Location: 1_Home_Admin.php");

        } elseif ($row['role'] === 'doctor') {

            //Doctor Login

            header("Location: 1_Home_Doctor.php");

        } elseif ($row['role'] === 'receptionist') {

            //Receptionist Login

            header("Location: 1_Home_Receptionist.php");
        }
        exit();
    } else {
        
        header("Location: 2_Login.html");
        exit();
    }
    ?>













