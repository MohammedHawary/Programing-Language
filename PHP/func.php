<?php

        // func_get_arg(index);         -> return index of   argumnt              
        // func_get_args();             -> return array from argumnt
        // func_num_args();             -> return number of  argumnt
            


function Info($Name = "Private", $Age = "Private", $Address = "Private", $Language = "Private", $Country = "Private")
    {
        $line_one = "Your Name is $Name <br>Your Age is $Age <br>Your Language is $Language<br>";
        $line_two = "Your Country is $Country <br>Your Address is $Address<br>";
        print $line_one . $line_two;
    }

    Info("Mohammed", 20, "Al Fayoum", "Arbic", "Agypt");            // Pass All Paramiters
    echo "======================================================================<br>";
    Info();                                                         // empty    Paramiters
    echo "======================================================================<br>";
    Info(Language:"Arbic",Age:20);                                  // Access certain Paramiter
    echo "======================================================================<br><br>";
    function sum_Numbers(){
        $result = 0;
        foreach(func_get_args() as $num){
            $result += $num;
        }
        echo $result;
    }
    sum_Numbers(9,11);

    echo "<br>======================================================================<br><br>";
    function sum_Numbers2(...$nums){        // like **argv      -> the three ... mean unpacking 
                                            // if you want pass array to this func you should start with ...
                                            // like [1,2,3,4,5]
        $result = 0;
        foreach($nums as $num){
            $result += $num;
        }
        echo $result;
    }
    sum_Numbers2(10,20,30,40,50);

    echo "<br>======================================================================<br><br>";
    function sum_Numbers3(){        // like **argv 
        echo "index 0 = " . func_get_arg(0) . "<br>";
        echo "<pre>";
        print_r(func_get_args());
        echo "</pre>";
        echo "Num Argc = " .func_num_args() . "<br>";
    }
    sum_Numbers3(10,20,30,40,50);
?>