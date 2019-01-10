<?php
$file = fopen("index.php","r");

while(! feof($file))
  {
  echo fgets($file). "<br />";
  }

fclose($file);
?> 
