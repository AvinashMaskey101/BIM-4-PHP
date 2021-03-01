<?php

if (isset($_POST, $_POST['uName'], $_POST['uPass'])) {
    if (!empty($_POST['uName']) && !empty($_POST['uPass'])) {
        echo "Welcome " . $_POST['uName'];
    } else {
        echo "Please fill up the form.";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Username: <input type="text" name="uName"><br><br>
        Password: <input type="password" name="uPass"><br><br>

        <input type="submit" name="form_submit" value="Log In">
    </form>
</body>

</html>