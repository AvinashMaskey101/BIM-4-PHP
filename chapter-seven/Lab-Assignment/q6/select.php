<?php require_once 'connect.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>address</th>
        </tr>
        <?php
        $sql = "SELECT * FROM details";
        $query = mysqli_query($conn, $sql);

        if (mysqli_num_rows($query) <= 0) {
            echo "No data found in table.";
        } else {
            $i = 1;
            while ($row = mysqli_fetch_assoc($query)) {
        ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                </tr>
        <?php
            }
        }

        ?>
    </table>
</body>

</html>