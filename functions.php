<html>
 <head>
  <title>PHP | PhP Functions</title>
 </head>
 <body>
 <?php
    $name = "cale";
    // makes the strinf uppercase
    print strtoupper($name);
    echo "<br>";
    // makes the string to lowercase
    print strtolower($name);
    echo "<br>";
    // prints out a specific charactor/s from a string
    print substr($name, 2, 2);
    echo "<br>";
    // prints the length of a string
    print strlen($name);
 ?>
 </body>
</html>
