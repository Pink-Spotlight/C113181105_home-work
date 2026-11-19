 <?php
require "about_me.php";
echo"W11 Ex01<br/>";
echo "<HR>";

  $file = basename($_SERVER["PHP_SELF"], ".php");
  $path = realpath($file . ".php"); 
  echo "real path: $path<br/>";
  $parts = pathinfo([$path]); 
  echo "path: " . $parts["dirname"] . "<br/>";
  echo "filename: " . $parts["basename"] . "<br/>";
  echo "extension: " . $parts["extension"] . "<hr/>";
