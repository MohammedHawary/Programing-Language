<?php

  /*
    File System Functions
    - disk_total_space()
    --- Get Total Space In Bytes => Then We Can Get [KB, MB, GB]
    - disk_free_space() || diskfreespace()
    --- Get Free Space In Bytes => Then We Can Get [KB, MB, GB]
    - file_exists(Path)
    --- Checks If A File Or Directory Exists
    - filesize(File_Name)
    --- Get Space In Bytes
  */

    $Disk_Name = "C:";

    echo "Total Space In Partition $Disk_Name       is ==> " . round(disk_total_space("C:") / 1024 / 1024 / 1024) . "<br>"; 
    // echo (int)(disk_total_space("C:") / 1024 / 1024 / 1024) . "<br>";
    echo "Total Free Space In Partition $Disk_Name  is ==> " .  round(disk_free_space("C:")  / 1024 / 1024 / 1024) . "<br>"; 

    var_dump(file_exists("test.php"));
    echo '<br>';
    echo filesize("test.txt");

    echo '<br>==============================================================================================<br>';

  /*
    File System Functions
    - is_dir(Name)
    --- Tells If The Filename Is A Directory
    - mkdir(Path[Required], Mode[Optional] = 0777, Recursive[Optional], Context[Optional])
    --- Permissions Is Ignored On Windows
    --- Permissions Is Octal Number Start With 0
    ------ Second Number Is => Owner Permission
    ------ Third Number Is => User Group Permission
    ------ Fourth Number Is => Others Permissions
    - rmdir(Name[Required], Context[Optional])
  */

  // var_dump(is_dir("Lessons"));
  echo '<br>';
  // var_dump(is_dir("elzero.txt"));
  echo '<br>';
  // mkdir("Test/Upload/Files", 0777, true);
  echo '<br>';
  // rmdir("Test");
  var_dump(file_exists("Test/Upload/Files"));

  echo '<br>==============================================================================================<br>';

  /*
    File System Functions
    - chmod(File[Required], Mode[Required])
    --- Change Mode
    - fileperms(Name)
    --- Gets File Permissions
    - clearstatcache()
    --- Clear Cache

    - You Can Change Owner chown()
    - You Can Change Group chgrp()
  */

    // mkdir("Y", 0700);
    //   echo fileperms("Y") . "<br>";
    //   chmod("Y", 0644);
    //   clearstatcache();
    //   echo fileperms("Y") . "<br>";

  echo '<br>==============================================================================================<br>';

  /*
    File System Functions
    - basename(Path[Required], Suffix[Optional])
    --- Returns Trailing Name Component Of Path
    - dirname(Path[Required], Levels[Optional] = 1)
    --- Returns A Parent Directory's Path
    --- Levels => Number of Parent Directories To Go Up
    - realpath(Path[Required])
    --- Returns Absolute Path
    - pathinfo(Path[Required], Flags[Optional]) => Return Array
    --- PATHINFO_DIRNAME
    --- PATHINFO_BASENAME
    --- PATHINFO_EXTENSION
    --- PATHINFO_FILENAME
  */

  echo basename(__FILE__) . "<br>";
  echo basename(__FILE__, ".php") . "<br>";

  echo dirname(__FILE__, 3) . "<br>";

  echo realpath(__FILE__) . "<br>";

  echo "<pre>";
  print_r(pathinfo(__FILE__));
  echo "</pre>";

  echo pathinfo(__FILE__)["extension"] . "<br>";
  echo pathinfo(__FILE__)["dirname"] . "<br>";

  echo pathinfo(__FILE__, PATHINFO_DIRNAME). "<br>";
  
  echo '<br>==============================================================================================<br>';

  /*
    File System Functions
    - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

    --- Mode
    --- [r] For Read => Pointer At The Beginning
    --- [r+] For Read & Write => Pointer At The Beginning
    --- [w] For Write => Pointer At The Beginning + Truncate To 0 Length => Create If Not Exists
    --- [w+] For Read & Write => Pointer At The Beginning + Truncate To 0 Length => Create If Not Exists

    - fgets(File[Required], Length[Optional])
    --- Get A Line From An Open File
    --- Length => Number Of Bytes To Read || End Of Line If No Length
    - fread(File[Required], Length[Required])
    --- Get A Data From An Open File
    --- Length => Maximum Number Of Bytes To Read
    - fclose(File[Required])
    --- Closes An Open File Pointer
  */

  $handle = fopen("test.php", "r");

  // echo fgets($handle, 4);

  echo fread($handle, 210);

  fclose($handle);

  echo '<br>==============================================================================================<br>';

    /*
    File System Functions
    - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

    --- Mode

    --- [a] For Write => Pointer At The End + Create If Not Exists
    --- [a+] For Read & Write => Pointer At The End + Create If Not Exists
    --- [x] Create + Open For Write => Pointer At The Beginning
    --- [x+] Create + Open For Read & Write => Pointer At The Beginning

    - fwrite(File[Required], String[Required], Length[Optional])
    --- Write To An Open File
    --- Length => Maximum Number Of Bytes To Write
    */

    $handle = fopen("test.php", "r");

    fwrite($handle, "\r\nThis Is A New Line 1", 5);
    fwrite($handle, "\r\nThis Is A New Line 2");

    fclose($handle);


    echo '<br>==============================================================================================<br>';

    /*
    File System Functions
    - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

    --- [c]
    ------ For Write
    ------ Create If Not Exists
    ------ No Problem If Its Exists
    ------ No Truncation
    ------ Pointer At The Beginning
    --- [c+] For Read &#038; Write

    - file(File[Required], Flag[Optional], Context[Optional])
    --- Read Entire File Into Array
    - feof(File[Required])
    --- Tests For EOF On A File Pointer
    */

    // echo '<pre>';
    // print_r(file("test.php"));
    // echo '</pre>';

    // echo count(file("test.php"));

    $handle = fopen("test.php", "r");

    // $line = 1;

    // while (! feof($handle)) {

    //   echo "Line $line => " . fgets($handle) . "<br>";

    //   $line++;

    // }

    for ($i = 0; $i < count(file("test.php")); $i++) {

    echo fgets($handle) . "<br>";

    }

    fclose($handle);

    echo '<br>==============================================================================================<br>';

/*
  File System Functions
  - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

  - rewind(File[Required])
  --- Return The Pointer To The Beginning Of The File

  - ftell(File[Required])
  --- Return Current Position Of The Pointer

  - fseek(File[Required], Offset[Required], Whence[Optional] = SEEK_SET)
  --- Go To A Position
  --- Offset In Bytes
  --- SEEK_SET => Equal To Offset
  --- SEEK_CUR => Current + Offset
  --- SEEK_END => EOF + Offset [Accept Negative]
*/

// $handle = fopen("elzero.txt", "r");

// echo ftell($handle) . "<br>"; // 0

// echo fgets($handle) . "<br>";

// echo fgets($handle) . "<br>";

// rewind($handle);

// echo fgets($handle) . "<br>"; // Elzero

// echo ftell($handle) . "<br>"; // 8

// echo fgets($handle) . "<br>"; // Elzero

// fseek($handle, -6, SEEK_END);

// echo fgets($handle) . "<br>"; // zero Web School

// fclose($handle);

// echo mb_strlen("School", "8bit");

echo '<br>==============================================================================================<br>';

<?php

/*
  File System Functions

  - glob(Pattern[Required], Flags[Optional])
  --- Find Pathnames Matching A Pattern And Return Array

  - rename(Old[Required], New[Required]) => Move
  --- Renames A File Or Directory

  - copy(Old[Required], New[Required], Context[Optional])
  --- Copy A File

  - unlink(File[Required], Context[Optional])
  --- Delete A File

  Same Concept
  - opendir()
  - readdir()
  - closedir()
*/

// echo "<pre>";
// print_r(glob("Old/*.*"));
// echo "</pre>";

// Rename => Same Place
// rename("Old/Test.txt", "Old/Testing.txt");

// Rename => Other Place => "Cut" || "Move"
// rename("Old/Testing.txt", "New/Testing_2.txt");

// Move To Other Place
// rename("Old/Elzero.pptx", "New/Elzero.pptx");

// Copy Without Rename
// copy("Old/Info.docx", "New/info.docx");

// Copy With Rename
// copy("Old/Work.txt", "New/working.txt");

// unlink("Old/Work.rtf");


?>
