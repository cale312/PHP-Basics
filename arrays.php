<html>
 <head>
  <title>PHP | Arrays</title>
 </head>
 <body>
 <?php
    $fav_movies = array();
    array_push($fav_movies, "Saw");
    array_push($fav_movies, "Wrong Turn");
    array_push($fav_movies, "Evil Dead");
    // use the sort php built in function
    sort($fav_movies);
    print join(", ", $fav_movies);
    echo "<hr>";
    // reverse sort the array
    rsort($fav_movies);
    print join("; ", $fav_movies);
 ?>
 </body>
</html>
