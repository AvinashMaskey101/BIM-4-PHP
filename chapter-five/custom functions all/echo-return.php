<?php
    function hello(){
        return "Hello";
    }

    function bye(){
        echo "Goodbye";
    }

    $hello = hello(); //returned hello is stored in a variable $hello
    $goodbye = bye(); //Goodbye is printed and nothing is returned

    echo "<br>";
    echo $hello; 
    echo $goodbye;

    /* Note: The reason is that "Goodbye" is echo'ed (written) as output, as soon as the function is
       called. "Hello", on the other hand, is returned to the $hello variable. the $goodbye is actually 
       empty, since the goodbye function does not return anything */