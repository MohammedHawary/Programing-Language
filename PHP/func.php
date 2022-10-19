<?php

        // func_get_arg(index);         -> return index of   argumnt              
        // func_get_args();             -> return array from argumnt
        // func_num_args();             -> return number of  argumnt
        // array_map("Function",$array) -> Take Number by Number and send it to function to do function job and return array


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

<?php
                            // Anonymous Function       -> function without Name to do specific thing and you didn't call it again
    echo "========================================================================<br><br>";
    
    function Say_Hello_to($someone){
        return "Hello $someone";
    }

    echo Say_Hello_to("Mohammed") . "<br>";


    $say_hi = function ($name){
        return "hi $name";
    };                                                      // don't forget ; at end of function

    echo $say_hi("Mohammed") . "<br>";

    $msg = "Welcome ";
    
    
    $say_welcome = function ($name) use($msg){                  // use to inheret var $msg inside anonymous function
        return "$msg $name";
    };                                                     

    echo $say_welcome("Mahmoud");

    $Numbers = [10, 20, 30, 40, 50, 60];

    function Add_Five($Num){
        return $Num + 5;
    }
                        
    $Numers_After_add_Five = array_map("Add_Five",$Numbers);

    echo "<pre>";
    print_r($Numers_After_add_Five);
    echo "</pre><br>";

    
    $Numers_After_add_ten = array_map(function($Number){ return $Number + 10; }, $Numbers);


    echo "<pre>";
    print_r($Numers_After_add_ten);
    echo "</pre><br>";

    echo "========================================================================<br><br>";
                                            // arrow function 
    function Say_Hello_to_2($someone){
        return "Hello $someone";
    }

    echo Say_Hello_to_2("Mohammed") . "<br>";


    $say_hi = fn($name) => "hi $name";
    
    echo $say_hi("Mohammed") . "<br>";

    $msg = "Welcome ";
    
    
    $say_welcome = fn ($name) => "$msg $name";                 

    echo $say_welcome("Mahmoud");

    $Numbers = [10, 20, 30, 40, 50, 60];

    function Add_Five_2($Num){
        return $Num + 5;
    }
                        
    $Numers_After_add_Five = array_map("Add_Five_2",$Numbers);

    echo "<pre>";
    print_r($Numers_After_add_Five);
    echo "</pre><br>";

    
    $Numers_After_add_ten = array_map(fn($Number) => $Number + 10, $Numbers);


    echo "<pre>";
    print_r($Numers_After_add_ten);
    echo "</pre><br>";
                                        
    echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";

?>