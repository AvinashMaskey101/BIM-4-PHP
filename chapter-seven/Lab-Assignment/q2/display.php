<?php require_once 'connect.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Displaying Db Content</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>ID.</th>
            <th>Full Name</th>
            <th>Age</th>
        </tr>
        <?php
        $sql = "SELECT * FROM users";
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
                    <td><?php echo $row['age']; ?></td>
                </tr>
        <?php
            }
        }

        ?>
    </table>
</body>

</html>