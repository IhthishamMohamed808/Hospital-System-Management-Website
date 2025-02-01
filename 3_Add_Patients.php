<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Patient</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />
</head>
<body>
    <?php
        include 'conn.php';

        if(isset($_POST["btn-submit"])){
            $pid = $_POST["txt-p-id"];
            $pname = $_POST["txt-p-name"];
            $padd = $_POST["txt-p-add"];
            $page = $_POST["txt-p-age"];
            $pdis = $_POST["txt-p-dis"];
            $pguard = $_POST["txt-p-guard"];
            $gender = $_POST["txt-p-gender"];
            $contact = $_POST["txt-contact"];

            $sql = "INSERT INTO `patients` (`pid`, `pname`, `paddress`, `page`, `pdisease`, `pguardian`, `pgender`, `pcontact`)
            VALUES ('$pid', '$pname', '$padd', '$page', '$pdis', '$pguard', '$gender', '$contact');";   
            
            
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

        <legend class="uk-legend">Add Patient</legend>

        <div class="uk-margin">
            <input class="uk-input" type="text" name="txt-p-id" placeholder="Patient ID" aria-label="Input">
        </div>

        <div class="uk-margin">
            <input class="uk-input" type="text" name="txt-p-name" placeholder="Patient Name" aria-label="Input">
        </div>

        <div class="uk-margin">
            <input class="uk-input" type="text" name="txt-p-add" placeholder="Patient Address" aria-label="Input">
        </div>

        <div class="uk-margin">
            <input class="uk-input" type="text" name="txt-p-age" placeholder="Patient Age" aria-label="Input">
        </div>

        <div class="uk-margin">
            <input class="uk-input" type="text" name="txt-p-dis" placeholder="Disease" aria-label="Input">
        </div>

        <div class="uk-margin">
            <input class="uk-input" type="text" name="txt-p-guard" placeholder="Patient Guardian" aria-label="Input">
        </div>

        <div class="uk-margin">
            <input class="uk-input" type="text" name="txt-p-gender" placeholder="Patient Gender" aria-label="Input">
        </div>

        <div class="uk-margin">
            <input class="uk-input" type="text" name="txt-contact" placeholder="Patient Contact" aria-label="Input">
        </div>

        <p uk-margin>
        <input type="Submit" name="btn-submit" button class="uk-button uk-button-default"></button><br>
        </p>
    </form>

    <p uk-margin>
    <a class="uk-button uk-button-default" href="3_CRUD_Patients.php">Go To Patients</a>
    </p>
</body>
</html>