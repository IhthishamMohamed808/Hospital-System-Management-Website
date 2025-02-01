<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Receptionist</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />
</head>
<body>
    <?php 
    include 'conn.php';
        $r_id = $_GET['r_id'];

    $sql= "SELECT * FROM receptionists WHERE r_id =$r_id";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0){
        while($row=  mysqli_fetch_assoc($result)){
            $r_name =  $row["r_name"];
            $r_contact =  $row["r_contact"];

        }
    }
    ?>

<form method="POST" class="uk-form-horizontal uk-margin-small">

<div class="uk-margin">

    <label class="uk-form-label" for="form-horizontal-text">Name </label>
    <div class="uk-form-controls">
        <input class="uk-input" id="form-horizontal-text" type="text" name="txtname" value="<?php echo $r_name?>">
    </div><br>

    <label class="uk-form-label" for="form-horizontal-text">Contact </label>
    <div class="uk-form-controls">
        <input class="uk-input" id="form-horizontal-text" type="text" name="txtcontact" value="<?php echo $r_contact?>">
    </div><br>


    <input class="uk-button uk-button-secondary" type="submit" value="edit" name="btnedit" id="">
</div>
</form>

<?php
    if(isset($_POST['btnedit'])){
        $r_name = $_POST['txtname'];
        $r_contact = $_POST['txtcontact'];

        $sql2 = "UPDATE `receptionists` SET `r_name`='$r_name', `r_contact`='$r_contact' WHERE `r_id`='$r_id' ";

        if(mysqli_query($conn, $sql2)){
            header("Location:5_CRUD_Receptionists.php");
        }else{
            echo "error" . $sql2 . "<br>". mysqli_error($conn);
        }
    }

?>


</body>
</html>