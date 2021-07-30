<?php
/* Example Looping with foreach( ) */

/* foreach Loop */
$person = array(
    'a' => array(
        'name' => 'User One',
        'email' => 'userone@gmail.com',
        'address' => 'Kathmandu',
        'phone' => '9999999999'
    ),
    'b' => array(
        'name' => 'User Two',
        'email' => 'usertwo@gmail.com',
        'address' => 'Lalitpur',
        'phone' => '8888888888'
    ),

    'c' => array(
        'name' => 'User Three',
        'email' => 'userthree@gmail.com',
        'address' => 'Bhaktapur',
        'phone' => '7777777777'
    ),

    'one' => array(
        'name' => 'User Four',
        'email' => 'userfour@gmail.com',
        'address' => 'Biratnagar',
        'phone' => '5555555555'
    )
);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1" align="center">
        <tr>
            <th>S.N</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone</th>
        </tr>
        <?php
        $i = 1;
        foreach ($person as $key => $user) {
        ?>
            <tr>
                <td><?php echo $i++ . "."; ?></td>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo $user['address']; ?></td>
                <td><?php echo $user['phone']; ?></td>
            </tr>
        <?php
        }

        ?>
    </table>
</body>

</html>