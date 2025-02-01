<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Receptionist</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />
</head>
<body>
    <?php
        include 'conn.php';

        if(isset($_POST["btn-submit"])){
            $r_id = $_POST["txt-r-id"];
            $r_name = $_POST["txt-r-name"];
            $r_contact = $_POST["txt-r-contact"];

            $sql = "INSERT INTO `receptionists` (`r_id`, `r_name`, `r_contact`)
            VALUES ('$r_id', '$r_name', '$r_contact');";   
            
            
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

        <legend class="uk-legend">Add Receptionist</legend>

        <div class="uk-margin">
            <input class="uk-input" type="text" name="txt-r-id" placeholder="Receptionist ID" aria-label="Input">
        </div>

        <div class="uk-margin">
            <input class="uk-input" type="text" name="txt-r-name" placeholder="Receptionist Name" aria-label="Input">
        </div>

        <div class="uk-margin">
            <input class="uk-input" type="text" name="txt-r-contact" placeholder="Contact Number" aria-label="Input">
        </div>

        <p uk-margin>
        <input type="Submit" name="btn-submit" button class="uk-button uk-button-default"></button><br>
        </p>
    </form>

    <p uk-margin>
    <a class="uk-button uk-button-default" href="5_CRUD_Receptionists.php">Go To Receptionists</a>
    </p>
</body>
</html>