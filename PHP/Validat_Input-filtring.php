<?php
   
  /*
                         Filter Functions

    - filter_var(Value[Required], Filter[Optional], Options[Optional])
    --- Validate Filters

    ------ FILTER_VALIDATE_BOOL => [True, 1, Yes, On]
    ---------- Flag => FILTER_NULL_ON_FAILURE => False For [False, 0, No, Off, ""] Only

    ------ FILTER_VALIDATE_URL
    ---------- Flag => FILTER_NULL_ON_FAILURE
    ---------- Flag => FILTER_FLAG_PATH_REQUIRED
    ---------- Flag => FILTER_FLAG_QUERY_REQUIRED

    ------ FILTER_VALIDATE_IP
    ---------- Flag => FILTER_NULL_ON_FAILURE
    ---------- Flag => FILTER_FLAG_IPV4
    ---------- Flag => FILTER_FLAG_IPV6

    ------ FILTER_VALIDATE_MAC
    ---------- Flag => FILTER_NULL_ON_FAILURE
  */



    echo "<pre>";
    print_r(filter_list());                                     // print filter lsit 
    echo "</pre>";

    foreach (filter_list() as $filter) {
        echo "$filter => ". filter_id($filter) . "<br>";        // print filter ID
    }

    echo "<br>=========================================================================================<br>";

    $var1 = "yes" || "on" || True || 1;

    // FILTER_NULL_ON_FAILURE       return NULL if the value didn't True or False
    if (filter_var($var1,258)){
        echo "This Is True <br>";
    }else {
        echo "This Is False <br>";
    }

    $var1 = "Mohammed";
    var_dump(filter_var($var1,258));
    echo "<br>";
    var_dump(filter_var($var1,258,FILTER_NULL_ON_FAILURE));

    echo "<br>";
    $url = "asdasdasds" || "https://www.google.com";
    var_dump(filter_var($url, 273));                    // Validate url
    echo "<br>";
    var_dump(filter_var($url, 273,FILTER_NULL_ON_FAILURE));                    // Validate url
    echo "<br>";
    echo "<br>";

    echo "<br>=========================================================================================<br><br><br><br>";

    $bool = "Elzero"; // True | 1 | "yes" | "on"

    var_dump(filter_var($bool, FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE));

    echo "<br>";

    $url = "https://elzero.org/?id=100";

    var_dump(filter_var($url, FILTER_VALIDATE_URL,
    ["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_PATH_REQUIRED | FILTER_FLAG_QUERY_REQUIRED]));

    echo "<br>";

    $ip = "192.168.2.1";

    var_dump(filter_var($ip, FILTER_VALIDATE_IP, ["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_IPV6]));

    echo "<br>";

    $mac = "00:00:5e:00d:53:af";

    var_dump(filter_var($mac, FILTER_VALIDATE_MAC));

    echo "<br>=========================================================================================<br><br><br><br>";

    /*
                         Filter Functions

        - filter_var(Value[Required], Filter[Optional], Options[Optional])
        --- Validate Filters

        ------ FILTER_VALIDATE_EMAIL
        ---------- Flag => FILTER_NULL_ON_FAILURE

        ------ FILTER_VALIDATE_INT
        ---------- Flag => FILTER_NULL_ON_FAILURE
        ---------- Options => min_range
        ---------- Options => max_range
        ---------- Convert To Int On Success

        ------ FILTER_VALIDATE_FLOAT
        ---------- Flag => FILTER_NULL_ON_FAILURE
        ---------- Options => min_range
        ---------- Options => max_range
        ---------- Convert To Float On Success
    */

    $email = "o@nn.sa";

    var_dump(filter_var($email, FILTER_VALIDATE_EMAIL, FILTER_NULL_ON_FAILURE));

    echo "<br>";

    $int = "90";

    var_dump(filter_var(
        $int,
        FILTER_VALIDATE_INT,
        ["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 50, "max_range" => 100]]
    ));

    echo "<br>";

    $float = "90.50";

    var_dump(filter_var(
        $float,
        FILTER_VALIDATE_FLOAT,
        ["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 50, "max_range" => 100]]
    ));


    echo "<br>=========================================================================================<br><br><br><br>";


    /*
      Filter Functions
  
      - filter_var(Value[Required], Filter[Optional], Options[Optional])
      --- Sanitize Filters
  
      ------ FILTER_SANITIZE_EMAIL
      ------ Remove All But Letters + Digits + !#$%&#038;'*+-=?^_`{|}~@.[]
      ------ Test ¥
  
      ------ FILTER_SANITIZE_NUMBER_INT
      --------- Remove All But Digits, +, -
  
      ------ FILTER_SANITIZE_NUMBER_FLOAT
      --------- Remove ALL But Digits, +, - And Optionally [.,eE]
      --------- Flags => FILTER_FLAG_ALLOW_THOUSAND
      --------- Flags => FILTER_FLAG_ALLOW_FRACTION
  
      ------ FILTER_SANITIZE_URL
      ------ Remove All But Letters + Digits + $-_.+!*'(),{}|\\^~[]`<>#%";/?:@&=.
      ------ Test ¥ + Space
    */
  
    $email = "o@n  ¥   n.sa";
  
    var_dump(filter_var($email, FILTER_SANITIZE_EMAIL));
  
    echo "<br>";
  
    $int = "100 + !@@@LHKLJKJFKLJKLJFKL  f;ldkf;lsdkfl;ksdf;lkdsf===-100";
  
    var_dump(filter_var($int, FILTER_SANITIZE_NUMBER_INT));
  
    echo "<br>";
  
    $float = "1,950,150.65AAASSS    sdfdsfsdfsdf@@@@41";
  
    var_dump(filter_var(
      $float,
      FILTER_SANITIZE_NUMBER_FLOAT,
      ["flags" => FILTER_FLAG_ALLOW_THOUSAND | FILTER_FLAG_ALLOW_FRACTION]
    ));
  
    echo "<br>";
  
    $url = "https://el         zer¥¥¥¥¥o.org";
  
    var_dump(filter_var($url, FILTER_SANITIZE_URL));
  
    echo "<br>";



    
?>