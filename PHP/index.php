<?php 
                        // we can use (print or echo ) to write string in php page

    echo "wellcom in my echo Command";                      // print string with echo
    echo "<br>";                                            // print new line  
    echo "<br>";                                            
    print "wellcom in my print Command";                    // print string with print
    #       this is a this is a comment 
    //      this is a this is a comment again
    /*      this is a this is a comment again*/
?>
    <!-- this is a comment but use it out of tages -->



    <!-- We Can use Multible php tages in one php file -->
<?php 
    echo "<br>";                                            
    echo "--------------------------------------------------------";
    echo "<br>";                                            
    echo "this is the the second php tage";                 

?>

<?php
    echo "<br>";                                    
    echo "<br>";
    echo "<br>";
    echo "----------------------------------------------------------------------------";
    echo "<br>";
    echo "----------------------------  Data Types  ---------------------------------";
    echo "<br>";
    echo "----------------------------------------------------------------------------";
    
    echo "<br>";
    echo gettype(true);                                 // return type of data or Variable 
    echo "<br>";
    echo gettype(100);
    echo "<br>";
    echo gettype(99.9);
    echo "<br>";
    echo gettype("PHP Sring");
    echo "<br>";
    echo gettype(array(1,2,3,5));
    echo "<br>";
    echo gettype([1,2,3,5]);
    echo "<br>";
?>

<?php
    echo "<br>";
    echo "----------------------------------------------------------------------------";
    echo "<br>";
    echo "------------ Type juggling + automatic type conversion  -----------";
    echo "<br>";
    echo "----------------------------------------------------------------------------";
    echo "<br>";
    echo 1 + "3"; // = 4 
    echo "<br>";
    echo gettype(1 + "3");           // return int 4
    echo "<br>";
    echo True + True; // = 2
    echo "<br>";
    echo gettype(True + True);       // return int 2 
    echo "<br>";
    echo 10 + "15 command ";         // = 25       + warning
    echo "<br>";
    echo 10 + (int) "15 command ";   // = 25 without warning
    echo "<br>";
    var_dump((BOOL)'');              // return true if string or array not empty or number !=0 or 
    echo "<br>";
    echo "wellcom                   
          in my page";               // print string withoout new line  
    echo "<br>";
    echo nl2br("wellcom
    in my page");
    echo "<br>";                    // print string with new line 
    $Name = "Mohammed";             // declare Variable Name with Mohammed
    echo <<< Heredoc
    welcome in my PHP  
    Page \\\\ 
    my Name is $Name
    Heredoc;                        // her doc the Variable inside it well print with his Value
    echo "<br>";
    echo <<<'Nowdoc'
    welcome in my PHP  
    Page \\\\ 
    my Name is $Name
    Nowdoc;                         // her doc the Variable inside it well print without value and print it as string
    echo "<br>";
    echo "<pre>";
    print_r([1,2,3,4,5,6,7]);       // print array with details 
    echo "</pre>";                  // use it to print this array with good pattern
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

?>