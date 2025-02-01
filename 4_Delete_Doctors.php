<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Doctors</title>
</head>
<body>
     
<?php
 include 'conn.php';
 $d_id = $_GET['d_id'];

 $sql= "DELETE FROM doctors WHERE d_id=$d_id";
if (mysqli_query($conn,$sql)){
    header("location:4_CRUD_Doctors.php");
}
else{
    echo "error" . mysqli_error($conn);
}

?>
</body>
</html>
