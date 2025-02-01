<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All Doctors</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />

</head>
<body>

    <table class="uk-table uk-table-small uk-table-divider">
        <thead>
            <th>Doctors ID</th>
            <th>Name</th>
            <th>Speciality</th>
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