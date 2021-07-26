<?php
$hobbies = array();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $hobb = @$_POST['hobbies'];
    if (!isset($hobb) && empty($hobb)) {
        echo "Please select your hobbies.";
    } else {
        $hobbies = $_POST['hobbies'];
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
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <!-- <input type="checkbox" name="hobbies[]" value="foo"> Football
        <input type="checkbox" name="hobbies[]" value="gui"> Playing Guitar
        <input type="checkbox" name="hobbies[]" value="cric"> Cricket <br><br> -->

        <?php
        $check_values = array('football', 'playing guitar', 'cricket');
        foreach ($check_values as $values) {
            echo '<input type="checkbox" name="hobbies[]" value="' . $values . '"';
            if (in_array($values, $hobbies)) {
                echo "checked";
            }
            echo ">" . ucfirst($values);
        }
        ?>
        <br><br>

        <input type="submit" value="Say Hello">
    </form>
</body>

</html>