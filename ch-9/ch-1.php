<?php
require "about_me.php";
echo "W11 Ex01<br/>";
echo "<HR>";

$file = basename($_SERVER["PHP_SELF"], ".php");
$path = realpath($file . ".php");
echo "real path: $path<br/>";
$parts = pathinfo([$path]);
echo "path: " . $parts["dirname"] . "<br/>";
echo "filename: " . $parts["basename"] . "<br/>";
echo "extension: " . $parts["extension"] . "<hr/>";

// 檢查檔案是否存在
if (file_exists($file . ".php")) {
  echo "file: $file.php exists <br/>";
} else {
  echo "file: $file.php does not exist <br/>";
}

// 複製檔案
if (!copy($file . ".php", $file . ".bak")) {
  echo "file: $file.php copy to bak failed <br/>";
} else {
  echo "file: $file.php copy to bak successful <br/>";
}