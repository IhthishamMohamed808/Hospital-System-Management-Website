<?php

    session_start ();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All Appointment</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />

</head>
<body>    

    <h1 class="uk-heading-small">All Appointments</h1>     
    <div class="uk-width-1-2@s uk-width-2-5@m">
    <ul class="uk-nav uk-nav-default">
        <li class="uk-active"></li>    </div>


    <table class="uk-table uk-table-small uk-table-divider">
        <thead>
            <th>Name</th>
            <th>Contact</th>
            <th>Doctor</th>
            <th>Reason</th>
            <th>Time</th>

        </thead>
        <tbody>
        <?php
            include 'conn.php';

            $sql1 = "SELECT * FROM appointment";
            $results = mysqli_query($conn, $sql1);


            if(mysqli_num_rows($results)>0){
                while($row = mysqli_fetch_assoc($results)){
                    echo "<tr>
                        <td>".$row["pname"]."</td>
                        <td>".$row["pcontact"]."</td>
                        <td>".$row["pdoc"]."</td>
                        <td>".$row["preason"]."</td>
                        <td>".$row["ptime"]."</td>


                                           
                    </tr>";
                }
            }else{
                echo "0 records";
            }

            $sql1 = "SELECT * FROM p_appointment";
            $results = mysqli_query($conn, $sql1);


            if(mysqli_num_rows($results)>0){
                while($row = mysqli_fetch_assoc($results)){
                    echo "<tr>
                        <td>".$row["pname"]."</td>
                        <td>".$row["pcontact"]."</td>
                        <td>".$row["pdoc"]."</td>
                        <td>".$row["preason"]."</td>
                        <td>".$row["ptime"]."</td>


                                           
                    </tr>";
                }
            }else{
                echo ".........Please Add Your Own Appointment For It To Display Below";
            }


            
        ?>

        </tbody>    
    </table>


</body>
</html>