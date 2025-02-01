<?php

    session_start ();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Receptionists</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />

</head>
<body>    

    <h1 class="uk-heading-small">CRUD Receptionists</h1>     
    <div class="uk-width-1-2@s uk-width-2-5@m">
    <ul class="uk-nav uk-nav-default">
        <li class="uk-active"></li>    </div>


    <table class="uk-table uk-table-small uk-table-divider">
        <thead>
            <th>Receptionist ID</th>
            <th>Name</th>
            <th>Contact</th>
           <td><a href='5_Add_Receptionists.php'> <button class='uk-button uk-button-secondary' type='button' >Add</button></a></td>
        </thead>
        <tbody>
        <?php
            include 'conn.php';

            $sql = "SELECT * FROM receptionists";
            $results = mysqli_query($conn, $sql);

            if(mysqli_num_rows($results)>0){
                while($row = mysqli_fetch_assoc($results)){
                    echo "<tr>
                        <td>".$row["r_id"]."</td>
                        <td>".$row["r_name"]."</td>
                        <td>".$row["r_contact"]."</td>
                                           
                        <td><a href='5_Edit_Receptionists.php?r_id=$row[r_id]'> <button class='uk-button uk-button-secondary' type='button' >edit</button></a></td>
                        <td><a href='5_Delete_Receptionists.php?r_id=$row[r_id]'> <button class='uk-button uk-button-secondary'>delete</button></td>
                    </tr>";
                }
            }else{
                echo "0 records";
            }
        ?>

        </tbody>    
    </table>


</body>
</html>