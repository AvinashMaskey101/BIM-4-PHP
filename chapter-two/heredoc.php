<?php

/* 
   A string literal can be specificed in four different ways:
        -> Single Quote
        -> Double quote
        -> Heredoc
        -> Nowdoc (not in syllabus)
*/

/* 


-> Heredoc provide useful alternatives to defining strings in PHP to the more widely
used quoted string syntax. They are especially useful when we need to define a string that spans
multiple lines (new lines are also interpreted when used in quoted strings) and where use of whitespace
is important.

-> Heredoc text behaves just like a double-quoted string, without the double quotes. This means that 
quotes in a heredoc do not need to be escaped.

*/



echo <<< MYFILE
        This is our second class in <b>PHP</b> 
        <br>
        "The double quote is also acceptable in heredoc"
        <br>
        'helloworld'
        <br>
        "As discussed in class try to copy and paste b.html table code here inside heredoc and see the result"      
MYFILE;


