<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = htmlentities($_POST['name']);
    $hobb = @$_POST['hobbies'];
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
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        Your Name: <input type="text" name="name" value="<?php echo (isset($name)) ? $name : ''; ?>"><br><br>

        <input type="checkbox" name="hobbies[]" value="foo" <?php if (isset($hobb[0]) && $hobb[0] == "foo") echo "checked = 'checked'" ;?>> Football
        <input type="checkbox" name="hobbies[]" value="gui" <?php if (isset($hobb[1]) && $hobb[1] == "gui") echo "checked = 'checked'" ;?>> Playing Guitar
        <input type="checkbox" name="hobbies[]" value="cric" <?php if (isset($hobb[2]) && $hobb[2] == "cric") echo "checked = 'checked'" ;?>> Cricket <br><br>

        <input type="submit" name="submit_form" value="Say Hello">
    </form>
</body>

</html>