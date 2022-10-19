<?php
    $str = "Hawary";

    echo $str[-1] . "<br>";             // print last char from var $str
    echo strlen($str) . "<br>";         // print len of var $str

    $str[-1] = "i";                     // update last char with value "i"
    echo $str . "<br>";
    $str[6] = "A";                      // append after last char char "A"
    echo $str . "<br>";
?>