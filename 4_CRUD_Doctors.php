<?php

    session_start ();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Doctors</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />

</head>
<body>    

    <h1 class="uk-heading-small">CRUD Doctors</h1>     
    <div class="uk-width-1-2@s uk-width-2-5@m">
    <ul class="uk-nav uk-nav-default">
        <li class="uk-active"></li>    </div>


    <table class="uk-table uk-table-small uk-table-divider">
        <thead>
            <th>Doctor ID</th>
            <th>Name</th>
            <th>Speciality</th>
           <td><a href='4_Add_Doctors.php'> <button class='uk-button uk-button-secondary' type='button' >Add</button></a></td>
        </thead>
        <tbody>
        <?php
            include 'conn.php';

            $sql = "SELECT * FROM doctors";
            $results = mysqli_query($conn, $sql);

            if(mysqli_num_rows($results)>0){
                while($row = mysqli_fetch_assoc($results)){
                    echo "<tr>
                        <td>".$row["d_id"]."</td>
                        <td>".$row["d_name"]."</td>
                        <td>".$row["d_spec"]."</td>
                                           
                        <td><a href='4_Edit_Doctors.php?d_id=$row[d_id]'> <button class='uk-button uk-button-secondary' type='button' >edit</button></a></td>
                        <td><a href='4_Delete_Doctors.php?d_id=$row[d_id]'> <button class='uk-button uk-button-secondary'>delete</button></td>
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