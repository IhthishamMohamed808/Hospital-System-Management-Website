<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Patient</title>
</head>
<body>
     
<?php
 include 'conn.php';
 $pid = $_GET['pid'];

 $sql= "DELETE FROM patients WHERE pid=$pid";
if (mysqli_query($conn,$sql)){
    header("location:3_CRUD_Patients.php");
}
else{
    echo "error" . mysqli_error($conn);
}

?>
</body>
</html>
