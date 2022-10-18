<!-- <?php $userName = "Hawary"  ?> declaire Var userName with value "Hawary"  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page | <?php echo $userName /* print userName in title Page*/?></title>        
</head>
<body>
    <h1>Welcome <?php echo $userName /* print user Name in html Tage */  ?> in Your Website </h1>
    <?php
        $$userName = "Mohammed";                     // declaire Variable Hawary with value "Mohammed"
        $$$userName = "Ahmed";                       // declaire Variable Mohammed  with Value  "Ahmed" 
        echo "$Hawary       this is Var Hawary   ";  // print Mohammed
        echo "<br>";
        echo "${$userName}  this is Var Hawary   ";  // print Mohammed
        echo "<br>";
        echo "<br>";
        echo "${$$userName} this is Var Mohammed ";  // print Ahmed 
        echo "<br>";
        echo "$Mohammed     this is Var Mohammed ";  // print Ahmed
        echo "<br>";
        echo "<br>";
        echo "<br>";
        $Mohammed = &$Hawary;                       // Var Mohammed is Reference to Hawary then if you change any Value in any Variable of thim it well be change in the another Variable
        echo "$Mohammed     this is Var Mohammed ";
        echo "<br>";
        echo "$Hawary       this is Var Hawary   ";
        echo "<br>";
        $Mohammed = "Hassan";                       // Var Mohammed = var Hawary = Value Hassan
        echo "<br>";
        echo "$Mohammed     this is Var Mohammed ";
        echo "<br>";
        echo "$Hawary       this is Var Hawary   ";
        echo "<br>";
        echo "<br>";
        $Hawary = "Sameh";                          // Var Mohammed = var Hawary = Value Sameh
        echo "<br>";
        echo "$Mohammed     this is Var Mohammed ";
        echo "<br>";
        echo "$Hawary       this is Var Hawary   ";
        echo "<br>"; 
    ?>
</body>
</html>