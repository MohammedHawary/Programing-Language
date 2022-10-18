<?php
                    //  The Deffrent Between include and require is 
                    // inclue  -> if you include file and this file didn't existed the code will print warning and continue
                    // require -> if you require file and this file didn't existed the code will print error and exit from code
    $cond_1 = True;

    if ($cond_1){
        include("test.php");
        echo "Including " . $userName . "<br>";
    }else{
        require("test.php");
        echo "Required " .$userName . "<br>";
    }
    
    $cond_2 = True;

    if ($cond_2){
        include("testtttt.php");
        echo "Including " . $userName . "<br>";
    }else{
        require("testtttt.php");
        echo "Required " .$userName . "<br>";
    }

?>
