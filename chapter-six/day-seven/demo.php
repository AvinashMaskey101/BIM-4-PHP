<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $name = htmlentities($_POST['name']);
        echo $name;
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
        Your Name: <input type="text" name="name" value="<?php echo (isset($name)) ? $name : 'John Doe';?>"><br><br>
        <input type="submit" name="submit_form" value="Say Hello">
    </form>
</body>

</html>