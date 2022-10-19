<?php
    /*
                        String Functions 
    lcfirst("String");                  -> first char lower
    ucfirst("string");                  -> first char uppwer
    strtolower("STRING");               -> all string lower case 
    strtoupper("string");               -> all string upper case
    ucwords("string string");           -> first char from every word upper case
    str_repeat("string ", 2);           -> repeat string certain number 

    */

    echo lcfirst("String")        . "<br>";                  
    echo ucfirst("string")        . "<br>";                  
    echo strtolower("STRING")     . "<br>";               
    echo strtoupper("string")     . "<br>";               
    echo ucwords("string string") . "<br>";           
    echo str_repeat("string ", 2) . "<br>";           
   
    echo "<br>=========================================================================================<br>";
   
    /* 
                            String Functions 
    implode(Separator[Optional], Array[Required]) => join() Is Alias 
    explode(Separator[Required], String[Required], Limit[Optional]) 
    str_shuffle(String[Required]) 
    strrev(String[Required])
    trim(String[Required] , CharsList[Optional])
    ltrim(String[Required ], CharsList[Optional]) 
    rtrim(String[Required], CharsList[Optional]) 
    Space "" 
    Tab \t 
    New Line \n 
    Carriage Return \r 
    Vertical Tab "\x0B" 
    NULL "\0"    

    */

    $Names_arr = ["Mohammed", "Mahmoud", "Ahmed"];
    $Names = implode(" ", $Names_arr); 
    echo $Names;
    echo "<br>";
    print_r(explode(" ", $Names, 2)); 
    echo "<br>";
    echo str_shuffle($Names); 
    echo "<br>";
    $Names = "+++++" . $Names . "++++++++";
    echo strrev($Names);
    echo "<br>";
    echo trim($Names , "+");
    echo "<br>";
    echo ltrim($Names, "+"); 
    echo "<br>";
    echo rtrim($Names, "+");
    echo "<br>";

    echo "<br>=========================================================================================<br>";

    /* 
                            String Functions 
    chunk_split(String[Required], Length [Optional], End[Optional])
    strlen(String[Required]) 
    str_split(String[Required], Length[Optional]) 
    strip_tags(String[Required] , Allowed[Optional]) 
    n12br(String[Required], XHTML[Optional])

    */

    echo chunk_split($Names , 4);
    echo "<br>";
    echo strlen($Names);
    echo "<br>";
    print_r(str_split($Names, 2));
    $Tages = "<h1>Mohammed <b>Mahmoud</b> Ahmed</h1>"; 
    echo "<br>";
    echo strip_tags($Names , "<h1>"); 
    echo "<br>";
    echo nl2br("Mohammed\nMahmoud\nAhmed",false);
    echo "<br>";

    echo "<br>=========================================================================================<br>";

    /* 
                            String Functions 
    strpos(String[Required],   Value[Required], Start Position[Optional]) Case-Sensitive
    strrpos(String[Required],  Value[Required], Start Position[Optional]) Case-Sensitive 
    stripos(String[ Required], Value[Required], Start Position[Optional]) Case-Insensitive
    strripos(String[Required], Value[Required], Start Position[Optional]) Case-Insensitive 
    substr_count(String[Required], Value [Required], Start Position[Optional], Length[Optional])

    */

    var_dump(strpos("Hello Hello", "H")); 
    echo '<br>'; 
    var_dump(strpos("Hello Hello", "H", 3)); 
    echo '<br>'; 
    var_dump(strpos("Hello Hello", "h")); 
    echo '<br>'; 
    var_dump(substr_count("Hello Hello","He"));
    echo '<br>'; 

    echo "<br>=========================================================================================<br>";

    /* 
                            String Functions 
    parse_str(String[Required], Array[Required])
    quotemeta(String[Required])
    str_pad(String[Required], Length[Required], String[Optional ], Pad-Flag[Optional])
            STR_PAD_BOTH
            STR_PAD_LEFT
            STR_PAD_RIGHT
    strtr(String[Required], From[Required], To[Required])
    strtr(String[Required], Array[Required])
    
    */

    parse_str("name=Mohammed&email=mohammed@gmail.com&os=linux", $query);
    echo "<pre>";
    print_r($query);
    echo "</pre>";
    echo "<br>";
    echo "Hello [] () * + <br>";
    echo quotemeta("Hello [ ] () + . <br>"); 
    echo str_pad("12"    , 8,"#", STR_PAD_BOTH)    . "<br>"; 
    echo str_pad("321"   , 8, 0 , STR_PAD_BOTH)    . "<br>"; 
    echo str_pad("1313"  , 8, 0 , STR_PAD_LEFT)    . "<br>"; 
    echo str_pad("15435" , 8, 0 , STR_PAD_LEFT)    . "<br>"; 
    echo str_pad("500432", 8, 0 , STR_PAD_LEFT)    . "<br>";
    echo strtr("Mohammed Mahmoud Ahmed", "h", "7") . "<br>";
    $replace = ["h" => "7","a" => "@"];
    echo strtr("Mohammed Mahmoud Ahmed", $replace) . "<br>";

    echo "<br>=========================================================================================<br>";

    /*
                            String Functions 
    str_replace( Find[Required], Replace With[Required], Data[Required], Replace Count[Optional]) Its Case-Sensitive
    str_ireplace(Find[Required], Replace With[Required ], Data[Required], Replace Count[Optional])

    */

    echo str_replace("@", "o", "Elzer@ Web Scheel", $r);                          // Elzero Web School 
    echo '<br>'; echo "Replaces Count Is $r";                                     //-3 
    echo '<br>'; echo str_replace([ "#", "@"], "A", "E#zer@ Web Sch @@#");        // EAzerA Web SchAAA 
    echo '<br>'; echo str_replace(["#", "@"], ["1", "o"], "E#zer@ Web Sch @@#");  // Elzero-Web-School
    echo '<pre>'; 
    print_r(str_replace( ["One", "Two"], [1, 2], ["One", "Two", "Three", "One", "One"])); 
    echo '</pre>';
    echo "<br>";
    echo '<pre>'; 
    print_r(str_ireplace( ["one", "two"], [1, 2], ["One", "Two", "Three", "One", "One"])); 
    echo '</pre>';
    
    echo "<br>=========================================================================================<br>";

    /* 
                            String Functions 
    substr_replace(String[Required], Replace With Or Insert[Required], Start[Required], Length[$])
                $ Positive Number => Length Of String To Be Replaced 
                $ Negative Number => Characters Left At The End After Replacement 
                $ 0               => Insert Instead of Replace

    */

    echo substr_replace("One Two", 1, 5);                               //-One Tw1 
    echo '<br> '; echo substr_replace("One Two ", 1, -1);               //-One Tw1 
    echo '<br>' ; echo substr_replace("One Two", 2, 2);                 // On2 
    echo '<br>' ; echo substr_replace("One Two", 2, 2, 2);              // On2wo 
    echo '<br>' ; echo substr_replace("One Two", 2, 2, 2);              // On2wo
    echo substr_replace( "Elzero_Web_School", "A", 7, -1);              // Elzero_Al-eb_School 
    echo '<br>' ; echo substr_replace("Elzero_Web_School", "A", 7, -3); // Elzero_Aool eb_Sch
    echo '<br>' ; echo substr_replace("Elzero_Web_School", 2, 2,0);     // On2 

    echo "<br>=========================================================================================<br>";

    /*
                                String Functions 
    wordwrap(String[Required], Width[Optional = 75], Break_Char[Optional = "\n"], Cut_Long[Optional.= False])
    ord(String[Required])
    chr(Int[Required])
    similar_text(String One[Required], String Two[Required], Percent[Optional])  Returns The Number Of Matching Characters 

    */

    $str = "Welcome To To To T Elzeroo Web School Website Very Very_Very_Long";
    echo strlen($str) . "<br>";
    echo wordwrap($str, 8, "<br> ", True);
    echo "<br>"; echo ord("a"); //-97 
    echo "<br>"; echo chr(97);  // a

    echo "<br>=========================================================================================<br>";

    /*
                                String Functions 
    strstr(String[Required], Search[Required], Before Search [Optional] = False) ----=> Alias [strchr] Case-Sensitive  
    stristr(String[Required], Search[Required] , Before Search[Optional]-= False) Case-Insensitive 
    number_format(Number[Required], Decimals[Optional], Decimal_String[Optional], Separator[Optional])
    */

    echo strstr("Elzero Web", "W") . "<br>"; // Web 
    echo strstr("Elzero Web", "z") . "<br>"; //-zero Web 
    echo strstr("Elzero Web", "W", True) . "<br>"; // Elzero 
    echo strlen(strstr("Elzero Web", "W", True) ) . "<br>"; //-7
    echo strstr("Elzero Web", "w") . "<br>"; //-False 
    var_dump(strstr("Elzero Web", "w")); 
    echo '<br>'; 
    echo stristr("Elzero Web", "w") . "<br>"; // Web
    var_dump(stristr("Elzero-Web", "w")); //-Web 
    echo '<br>';
    echo 10_000_000; 
    echo '<br> ';
    echo number_format (10000000.156023); 
    echo '<br> '; 
    echo number_format(10000000.156023, 3); 
    echo '<br>'; 
    echo number_format(10000000.156023, 3, "@"); 
    echo '<br>'; 
    echo number_format(10000000.156023, 3, "@", "#");

    echo "<br>=========================================================================================<br>";

    /* 
                                Array Functions 
    array_chunk(Array[Required], Length[Required], Preserve_Key[Optional]) 
                    Split An Array Into Chunks [Return A Multidimensional Indexed Array]
                    Preserve Key 
                            [False => Default] Reindex The Keys 
                            [True] Preserve The Keys
        
    array_change_key_case(Array[Required], Case[Optional])
                    Changes The Case Of All Keys In An Array 
                    Case 
                        [CASE_LOWER => Default] Changes The Keys To Lowercase 
                        [CASE_UPPER] Changes The Keys To Uppercase

    array_combine(Array_Of_Keys[Required], Array_Of_Values[Required]) 
    array_count_values(Array[Required])  =>  Counts All The Values Of An Array
    */

    $friends = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal"]; 

    echo '<pre>';
    print_r(array_chunk ($friends, 2)); 
    echo '</pre>'; 

    $countries = ["EG" => "Egypt", "KSA" => "Saudi Arabia", "Sy" => "Syria" , "USA" => "United States"];

    echo '<pre> '; 
    print_r(array_change_key_case($countries, CASE_UPPER));
    echo '</pre>'; 

    $keys   = ["A", "0", "K"];
    $values = ["Ahmed", "Osama", "Kamal"];

    echo '<pre>'; 
    print_r(array_combine($keys, $values)); 
    echo '</pre>'; 

    $counting = ["A", "A", "B", "B", "C"]; 
    
    echo '<pre>'; 
    print_r(array_count_values($counting)) ;
    echo '</pre>';
    
?>