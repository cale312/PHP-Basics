<html>
 <head>
  <title>PHP | Loops</title>
 </head>
 <body>
 <?php
    do {
        $roll = rand(1, 6);
        echo "<p> you rolled a {$roll} </p>";
    } while ($roll !== 6);
    print " You win";
 ?> 
 </body>
</html>
