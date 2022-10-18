<?php

    echo $_POST['userName'];                      // get usrname inupt from down form 

?>

<form action="" method="POST">                  <!-- the deffrent between POST and GET -> POST hidden your input
                                                     info from showen in url  GET revese POST                       -->
    <label>User Name </label>
    <input type="text" name="userName">
</form>
