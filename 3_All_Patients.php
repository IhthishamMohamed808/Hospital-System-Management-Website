<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All Patients</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />

</head>
<body>

<h1 class="uk-heading-small">All Patients</h1>     
    <div class="uk-width-1-2@s uk-width-2-5@m">
    <ul class="uk-nav uk-nav-default">
        <li class="uk-active"></li>    </div>

    <table class="uk-table uk-table-small uk-table-divider">
        <thead>
            <th>Patients ID</th>
            <th>name</th>
            <th>address</th>
            <th>contact</th>
            <th>disease</th>
            <th>guardian</th>
        </thead>
        <tbody>
        <?php
            include 'conn.php';

            $sql = "SELECT * FROM patients";
            $results = mysqli_query($conn, $sql);

            if(mysqli_num_rows($results)>0){
                while($row = mysqli_fetch_assoc($results)){
                    echo "<tr>
                        <td>".$row["pid"]."</td>
                        <td>".$row["pname"]."</td>
                        <td>".$row["paddress"]."</td>
                        <td>".$row["pcontact"]."</td>
                        <td>".$row["pdisease"]."</td>
                        <td>".$row["pguardian"]."</td>

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