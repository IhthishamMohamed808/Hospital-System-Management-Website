<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Patient</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />
</head>
<body>
    <?php 
    include 'conn.php';
        $pid = $_GET['pid'];

    $sql= "SELECT * FROM patients WHERE pid=$pid";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0){
        while($row=  mysqli_fetch_assoc($result)){
            $name =  $row["pname"];
            $addr =  $row["paddress"];
            $cont =  $row["pcontact"];
            $dis =  $row["pdisease"];
            $guard =  $row["pguardian"];
        }
    }
    ?>

<form method="POST" class="uk-form-horizontal uk-margin-small">

<div class="uk-margin">
    <label class="uk-form-label" for="form-horizontal-text">Name </label>
    <div class="uk-form-controls">
        <input class="uk-input" id="form-horizontal-text" type="text" name="txtname" value="<?php echo $name?>">
    </div><br>
    <label class="uk-form-label" for="form-horizontal-text">Address </label>
    <div class="uk-form-controls">
        <input class="uk-input" id="form-horizontal-text" type="text" name="txtadd" value="<?php echo $addr ?>">
    </div><br>
    <label class="uk-form-label" for="form-horizontal-text">Contact</label>
    <div class="uk-form-controls">
        <input class="uk-input" id="form-horizontal-text" type="text" name="txtcont" value="<?php echo $cont ?>">
    </div><br>
    <label class="uk-form-label" for="form-horizontal-text">Disease</label>
    <div class="uk-form-controls">
        <input class="uk-input" id="form-horizontal-text" type="text" name="txtdis" value="<?php echo $dis ?>">
    </div><br>
    <label class="uk-form-label" for="form-horizontal-text">Guardian</label>
    <div class="uk-form-controls">
        <input class="uk-input" id="form-horizontal-text" type="text" name="txtguard" value="<?php echo $guard ?>">
    </div>
    <br>
    <input class="uk-button uk-button-secondary" type="submit" value="edit" name="btnedit" id="">
</div>
</form>

<?php
    if(isset($_POST['btnedit'])){
        $name = $_POST['txtname'];
        $addr = $_POST['txtadd'];
        $cont = $_POST['txtcont'];
        $dis  = $_POST['txtdis'];
        $guard = $_POST['txtguard'];

        $sql2 = "UPDATE `patients` SET `pname`='$name', `paddress`='$addr',`pcontact`='$cont', `pdisease`='$dis',`pguardian`='$guard'WHERE `pid`='$pid' ";

        if(mysqli_query($conn, $sql2)){
            header("Location:3_CRUD_Patients.php");
        }else{
            echo "error" . $sql2 . "<br>". mysqli_error($conn);
        }
    }

?>


</body>
</html>