<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Doctor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />
</head>
<body>
    <?php 
    include 'conn.php';
        $d_id = $_GET['d_id'];

    $sql= "SELECT * FROM doctors WHERE d_id =$d_id";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0){
        while($row=  mysqli_fetch_assoc($result)){
            $d_name =  $row["d_name"];
            $d_spec =  $row["d_spec"];

        }
    }
    ?>

<form method="POST" class="uk-form-horizontal uk-margin-small">

<div class="uk-margin">

    <label class="uk-form-label" for="form-horizontal-text">Name </label>
    <div class="uk-form-controls">
        <input class="uk-input" id="form-horizontal-text" type="text" name="txtname" value="<?php echo $d_name?>">
    </div><br>

    <label class="uk-form-label" for="form-horizontal-text">Speciality </label>
    <div class="uk-form-controls">
        <input class="uk-input" id="form-horizontal-text" type="text" name="txtspec" value="<?php echo $d_spec?>">
    </div><br>


    <input class="uk-button uk-button-secondary" type="submit" value="edit" name="btnedit" id="">
</div>
</form>

<?php
    if(isset($_POST['btnedit'])){
        $d_name = $_POST['txtname'];
        $d_spec = $_POST['txtspec'];

        $sql2 = "UPDATE `doctors` SET `d_name`='$d_name', `d_spec`='$d_spec'WHERE `d_id`='$d_id' ";

        if(mysqli_query($conn, $sql2)){
            header("Location:4_CRUD_Doctors.php");
        }else{
            echo "error" . $sql2 . "<br>". mysqli_error($conn);
        }
    }

?>


</body>
</html>