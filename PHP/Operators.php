<?php
    $Var1  = "Mohammed";
    $Var2 = "Mahmoud";
    $Var3   = 20;
    $Var4  = 46;

    var_dump($Var1 == $Var2);           //-> false => check if Value of Var1 equal Value of Var2 not Check type of variables
    echo "<br>";
    var_dump($Var3 == $Var4);           //->false  => check if Value of Var3 equal Value of Var4 not Check type of variables
    echo "<br>";
    $Var4  = 20.000;
    $Var1  = "20";
    echo "<br>";
    var_dump($Var1 <>/* != */ $Var4);   //->false  => check if Value of Var3 equal Value of Var4 not Check type of variables
    echo "<br>";
    var_dump($Var1 == $Var4);           //-> true  => check if Value of Var3 equal Value of Var4 not Check type of variables
    echo "<br>";
    var_dump($Var1 === $Var4);          //->false  => check if Value and data type of Var1     equal Value and data type of Var4
    echo "<br>";
    var_dump($Var1 !== $Var4);          //->true   => check if Value and data type of Var1 not equal Value and data type of Var4
    echo "<br>";
    $Num1 = 100;
    $Num2 = 200;
    var_dump($Num1 <=> $Num2);          // if Num1 less than or equal or greater then Num2 => return -1 if Num1 < Num2 , 0 if Num1 == Num2 , 1 if Num1 > Num2  
    echo "<br>";
    $Num1 = 200;
    var_dump($Num1 <=> $Num2);          //-> 0
    echo "<br>";
    $Num1 = 300;
    var_dump($Num1 <=> $Num2);          //-> 1
    echo "<br>";
    $Num1 = 0;
    echo "<br>";
    echo $Num1++;                      //-> 0
    echo "<br>";
    echo $Num1 ;                       //-> 1
    echo "<br>";
    $Num1 = 0;
    echo ++$Num1;                      //-> 1
    echo "<br>";
    echo $Num1;                        //-> 1
    echo "<br>";
    var_dump(100 == 110 or /*||*/ 100 == 110 and /*&&*/ 100 == 110 xor 100 == 110 ); // xor return True if one operant true if booth = true return false 
                                                                                     // if true true -> false , true false -> true ,false false -> false
    echo "<br>";
    $arry1 = [1,2,3,4];
    $arry2 = [ 4 => 5 ,5 => 6 ,6 => 7, 7 => 8 ];    //if you don't change key value it will be overwrite valuse arry1
    $arry3 = $arry1 + $arry2;
    echo "<br>";
    echo "<pre>";
    print_r($arry1);
    print_r($arry2);
    print_r($arry3);
    echo "</pre>";
    echo "<br>";
    echo "===============================================================================";
    echo "<br>";
    $a = 10 || False;           // $a = (10 || False) -> return True = 1
    echo $a;     
    echo "<br>";
    $a = 10 or False;           // ($a = 10) or  False -> return True = 10
    echo $a;     
    echo "<br>";
?>