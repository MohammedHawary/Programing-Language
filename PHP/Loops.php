<?php
    echo "=================================== while =========================================" . "<br>";
    $counter = 1;
    while($counter != 5){
        echo "This Is Line $counter " . "<br>";
        $counter++;
    }
    $counter2 = 10;
    while($counter2 != 15):
        echo "This Is Line $counter2 " . "<br>";
        $counter2++;
    endwhile;
?>



<?php
    echo "=================================== for =========================================" . "<br>";
    for($x = 0;$x <5; $x++){
        echo "This Is Line $x " . "<br>";
    }
    for($x = 10;$x <15; $x++):
        echo "This Is Line $x " . "<br>";
    endfor;
?>

<?php
    echo "=================================== foreach =========================================" . "<br>";
    $Counters = ["Egypt", "Soudan", "Libia", "Moraco"];

    foreach($Counters as $Key => $counter ){            // print Value with key        
        echo "Key $Key => $counter" . "<br>";           
    }

    foreach($Counters as $Key => $counter ):           // print Value with key        
        echo "Key $Key => $counter" . "<br>";           
    endforeach;
?>