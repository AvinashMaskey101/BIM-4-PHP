<?php
$name = $email = $error = $success = "";
$nameErr = $emailErr = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    function clean_input($field_data)
    {
        $field_data = trim($field_data);
        $field_data = stripslashes($field_data);
        $field_data = strip_tags($field_data);
        $field_data = htmlentities($field_data);

        return $field_data;
    }

    $name = clean_input($_POST['uname']);
    $email = clean_input($_POST['uemail']);
    

    if (isset($name, $email) && !empty($name) && !empty($email)) {

        if (!preg_match("/^[a-z A-Z ]+$/", $name)) {
            $nameErr = "Only letters are allowed";
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Enter a Valid Email";
        }

        $success = "** Congratulations! **";
    } else {
        $error = "** All the fields are compuslory! **";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        Name: <input type="text" name="uname">
        <span style="color: red">
            <?php
            if ($nameErr) {
                echo $nameErr;
            }
            ?>
        </span>
        <br><br>
        Email: <input type="email" name="uemail">
        <span style="color: red">
            <?php
            if ($emailErr) {
                echo $emailErr;
            }
            ?>
        </span>
        <br><br>
        <input type="submit" value="Submit"><br><br>
        <span style="color: red">
            <?php
            if ($error) {
                echo $error;
            }

            ?>
        </span>
        <span style="color: blue">
            <?php
            if (isset($success) && empty($nameErr) && empty($emailErr)) {
                echo $success;
            }

            ?>
        </span>
    </form>
</body>

</html>