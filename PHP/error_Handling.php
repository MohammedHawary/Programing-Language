<?php

                            // Variable Handling 

    // $a = 50;
    echo "<br>";
    echo "this is the error without @"; 
    echo "<br>";
    $b = $a;               //we use @ to ignore if var $a not exissted 
    echo $b;
    echo "<br>";
    echo "this is no error after use @";
    echo "<br>";
    // $c = 50;
    $d = @$c;               //we use @ to ignore if var $a not exissted 
    echo $d . " No Error";
    echo "<br>";

                            // file Handling 

    $file_path = "test.txt";            // exist     file
    // $file_path = "testttttt.txt";    // unexisted file
    $file = @file($file_path) or die("No File");        // check if file existed will print not existed will ignore error by
                                                        // sign @ and die the code 
    echo "<pre>";
    print_r($file);
    echo "</pre>";
    echo "<br>";

                            // inclode Handling

    include("test2.txt");                                  //  exist    file
    echo "<br>";
    (@include("test2333.txt")) or die("File Not Found");   // unexisted file to use func dire() should it to be inside ()
    


?>