<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if(isset($_POST['city']) && !empty($_POST['city'])){
        foreach ($_POST['city'] as $key => $value) {
           echo $value . "<br>";
        }
    }else{
        echo "** Please select you city **" . "<br>";
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

    <form method="POST" action="<?php echo  $_SERVER['PHP_SELF']; ?>">

        City you live in: <select name="city[]" multiple>
            <option value="Kathmandu"> Kathmandu </option>
            <option value="Pokhara"> Pokhara </option>
            <option value="Biratnagar"> Biratnagar </option>
            <option value="Chitwan"> Chitwan </option>
            <option value="Dhangadi"> Dhangadi </option>
        </select><br><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>