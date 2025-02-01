<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Doctor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />
</head>
<body>
    <?php
        include 'conn.php';

        if(isset($_POST["btn-submit"])){
            $d_id = $_POST["txt-d-id"];
            $d_name = $_POST["txt-d-name"];
            $d_spec = $_POST["txt-d-spec"];

            $sql = "INSERT INTO `doctors` (`d_id`, `d_name`, `d_spec`)
            VALUES ('$d_id', '$d_name', '$d_spec');";   
            
            
        if(mysqli_query($conn, $sql)){
            echo "successfully data added";
        }
        else{
            echo "error" . $sql . "<br>" . mysqli_error($conn);
        }

        }
    ?>

    <form method="POST" class="uk-form-horizontal uk-margin-small">

    <fieldset class="uk-fieldset">

        <legend class="uk-legend">Add Doctor</legend>

        <div class="uk-margin">
            <input class="uk-input" type="text" name="txt-d-id" placeholder="Doctor ID" aria-label="Input">
        </div>

        <div class="uk-margin">
            <input class="uk-input" type="text" name="txt-d-name" placeholder="Doctor Name" aria-label="Input">
        </div>

        <div class="uk-margin">
            <input class="uk-input" type="text" name="txt-d-spec" placeholder="Doctor Speciality" aria-label="Input">
        </div>

        <p uk-margin>
        <input type="Submit" name="btn-submit" button class="uk-button uk-button-default"></button><br>
        </p>
    </form>

    <p uk-margin>
    <a class="uk-button uk-button-default" href="4_CRUD_Doctors.php">Go To Doctors</a>
    </p>
</body>
</html>