<?php
    $favFruitErr = "";
    $favFruit = array();

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(empty($_POST['favFruit'])){
            $favFruitErr = "You must select one or more option.";
        }else{
            $favFruit = $_POST['favFruit'];
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <span style="color: red;">
        <?php
            if($favFruitErr){
                echo $favFruitErr;
            }
        ?>
    </span>
    <br>
    <span style="color: green;">
        <?php
            if($favFruit){
                echo implode(", ", $favFruit);
                echo "<br>";
                echo "<br>";
            }
        ?>
    </span>
    <form method = "POST" action="<?php echo $_SERVER['PHP_SELF'];?>">

        <select name="favFruit[]" size="4" multiple>
            <?php
                $options = array('apple', 'banana', 'plum', 'pomegranate', 'strawberry', 'watermelon');

                foreach($options as $option){
                    echo '<option value="'.$option.'"';
                    if(in_array($option, $favFruit)){
                        echo "selected";
                    }
                    echo ">".ucFirst($option)."</option>";
                }
            ?>  
        </select>

        <br>
        <br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>