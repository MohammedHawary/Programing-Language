<?php
    $First_Name  = "Mohammed";
    $Second_Name = "Mahmoud";
    $Third_Name  = "Ahmed";
    define("MAX_NUM",200);
    echo "$First_Name $Second_Name $Third_Name";
    echo "<br>";
    echo $First_Name . " " . $Second_Name . " " . $Third_Name;        //  this is a concatinat
    echo "<br>";
    echo $First_Name."<br>";    
    echo $First_Name . " " . $Second_Name . " the Max Number = " . MAX_NUM . "<br>"; // we use concatinat to can print constantants and func
    $full_Name_With_Spaces = "$First_Name $Second_Name $Third_Name " . MAX_NUM; 
    echo $full_Name_With_Spaces . "<br>";
    $full_Name_without_Spaces = $First_Name .= $Second_Name .= $Third_Name .= MAX_NUM ; 
    echo $full_Name_without_Spaces . "<br>"; 
?>