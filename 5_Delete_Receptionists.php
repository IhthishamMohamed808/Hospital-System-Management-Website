<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Receptionists</title>
</head>
<body>
     
<?php
 include 'conn.php';
 $r_id = $_GET['r_id'];

 $sql= "DELETE FROM receptionists WHERE r_id=$r_id";
if (mysqli_query($conn,$sql)){
    header("location:5_CRUD_Receptionists.php");
}
else{
    echo "error" . mysqli_error($conn);
}

?>
</body>
</html>
