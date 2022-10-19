<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        <input type="text" name="user" required >    
        <input type="submit" value="Send">
    </form>
    <?php
        // Input Name "Osama"

        // Needed Output
        // "The Request Method Is Post And Username Is Osama"
        // "This Username Osama Is Admin"
        function Type_Request($r_type){
            $admins = ["Osama", "Ahmed", "Sayed"];
            if (count($_POST) != 0 || count($_GET) != 0 )
            {
                @$Ttype =  $r_type == "POST"  ? $_POST['user'] : $_GET['user'];
                echo "The Request Method Is $r_type And Username Is $Ttype" . "<br>";
                foreach($admins as $admin){
                    if ($admin == $Ttype){
                        echo "This Username $Ttype Is Admin";
                    }
                }
            }
        }

        Type_Request($_SERVER['REQUEST_METHOD']);
    ?>
</body>
</html>

