<?php
    define("DB_NAME","Users");          // this is like  const DB_NAME    = Users
    define("MAX_USERS",500);            // this is like  const MAX_USERS  = 500
    // define("MAX_USERS",52);          // you can't modify any constant like this line
    echo DB_NAME;
    echo "<br>";
    echo MAX_USERS;
    echo "<br>";
    echo php_uname();
    echo "<br>";
    echo PHP_VERSION;
    echo "<br>";
?>