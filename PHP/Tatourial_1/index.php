<?php
    if ($_SERVER['REQUEST_METHOD'] === "POST"){ // if server get post method True and do this condition -> True
        if ($_POST['lang'] == "ar"){            // check if var lang == ar
            header("Location: ar.php");         // redirect to ar.php page
            exit();                             // exit after redirect
        }elseif($_POST['lang'] == "en"){        // check if var lang == en
            header("Location: en.php");         // redirect to en.php page
            exit();                             // exit after redirect
        }else{              
            header("Location: sp.php");         // redirect to sp.php page
            exit();                             // exit after redirect
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
</head>
<body>
    <form action="" method="POST">
        <dev>  
            <label >User Name </label>                      <!-- Lable to show User Name -->
            <input type="text"  name="UserName" required>   <!-- get input in var "UserName" type text -->
            <select name="lang">                            <!-- var name "lang" and select from items -->
                <option value="ar">Arbic</option>           <!-- first  item with value ar -->
                <option value="en">English</option>         <!-- second item with value en -->
                <option value="sp">Spanish</option>         <!-- third  item with value sp -->
            </select>
            <input type="submit" value="Submit">            <!-- input type submit buttom-->
        </dev>
    </form>
    
</body>
</html>