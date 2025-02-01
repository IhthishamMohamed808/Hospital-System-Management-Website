<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Appointment</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />

</head>
<body> 

    <h1>Schedule An Appointment</h1>
    <br>
<?php
        include 'conn.php';

        if(isset($_POST["btn-submit"])){
            $pname = $_POST["txt-p-name"];
            $pcontact = $_POST["txt-p-contact"];
            $pdoc = $_POST["txt-p-doc"];
            $preason = $_POST["txt-p-reason"];
            $ptime = $_POST["txt-p-time"];

            $sql = "INSERT INTO `p_appointment` (`pname`, `pcontact`, `pdoc`, `preason`, `ptime`)
            VALUES ('$pname', '$pcontact', '$pdoc','$preason' , '$ptime');";   

            $sql1 = "INSERT INTO `appointment` (`pname`, `pcontact`, `pdoc`, `preason`, `ptime`)
            VALUES ('$pname', '$pcontact', '$pdoc','$preason' , '$ptime');";   

            


            
            
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

    <legend class="uk-legend">Add An Appointment</legend>

    <div class="uk-margin">
        <input class="uk-input" type="text" name="txt-p-name" placeholder="Your Name" aria-label="Input">
    </div>

    <div class="uk-margin">
        <input class="uk-input" type="text" name="txt-p-contact" placeholder="Your Contact" aria-label="Input">
    </div>

    <div class="uk-margin">
        <input class="uk-input" type="text" name="txt-p-doc" placeholder="Doctor Name" aria-label="Input">
    </div>

    <div class="uk-margin">
        <input class="uk-input" type="text" name="txt-p-reason" placeholder="Reason" aria-label="Input">
    </div>

    <div class="uk-margin">
        <input class="uk-input" type="text" name="txt-p-time" placeholder="Time" aria-label="Input">
    </div>


    <p uk-margin>
    <input type="Submit" name="btn-submit" button class="uk-button uk-button-default"></button><br>
    </p>
</form>

<p uk-margin>
<a class="uk-button uk-button-default" href="6_View_Appointment.php">Go To Appointment</a>
</p>

</body>
</html>