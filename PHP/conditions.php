<?php

    $first_Number  = 20;
    $second_Number = 20;

    if($first_Number == $second_Number) {

        echo "$first_Number  =  $second_Number";

    }elseif($first_Number < $second_Number){
        
        echo "$first_Number  <  $second_Number";

    }else{
        
        echo "$first_Number  >  $second_Number";

    }

?>

<?php
    echo "<br>";
    echo "===================  second sentax type  ====================";
    echo "<br>";
    if ($first_Number == $second_Number){                           // first {
        echo "$first_Number  =  $second_Number";

?>

<?php }?>                                                             <!-- second }   end of if -->


<?php
    echo "<br>";
    echo "===================  third sentax type  ====================";
    echo "<br>";

    if($first_Number == $second_Number):

        echo "$first_Number  =  $second_Number";

    elseif($first_Number < $second_Number):
        
        echo "$first_Number  <  $second_Number";
    else:        
        echo "$first_Number  >  $second_Number";
    endif;          
?>


<?php 
    if ($first_Number == $second_Number): // or {                   start of if

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if is run</title>
</head>
       <h1> condition is done </h1>
<body>
    
</body>
</html>

<?php endif;?><!-- or }                                          end of if -->


<?php
                        // condition 1
    $Num1 = 10;
    echo "1) I Love PHP Because it ";
    if ($Num1 > 8){
        echo "Good";
    }else{
        echo "Bad";
    }
    echo " Language" . "<br>";
                        // condition 2
    echo "2) I Love PHP Because it ". ($Num1 > 8 ? "Good" : "Bad" ) . " Language"."<br>";
                        // condition 3
    $result = $Num1 > 8 ? "Good" : "Bad";
    echo "3) I Love PHP Because it $result Language";

?>