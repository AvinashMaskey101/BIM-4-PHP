<?php require_once 'db-connection.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>ID.</th>
            <th>Full Name</th>
            <th>Email</th>
        </tr>
        <?php
        $sql = "SELECT * FROM users";
        $query = mysqli_query($conn, $sql);

        if (mysqli_num_rows($query) <= 0) {
            echo "No data found in table.";
        } else {
            //fetch all data from a table at one go
            // $data = mysqli_fetch_all($query, MYSQLI_ASSOC);
            
            //fetch a data from a table one row at a time
            // $row = mysqli_fetch_assoc($query);
            
            $i = 1;
            while ($row = mysqli_fetch_assoc($query)) {
                /* echo "<pre>";
                print_r($row);
                echo "</pre>";
                exit; */
        ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                </tr>
        <?php
            }
        }

        ?>
    </table>
</body>

</html>