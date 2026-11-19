<?php
//檔案操作
$file = basename($_SERVER["PHP_SELF"], ".php");
$fp = fopen($file . ".php", "r")
    or exit("message");

echo "file: $file.php open successful <br/>";
echo "file size: " . filesize($file . ".php") . "<br/>";
fclose($fp); //關閉檔案
echo "file: $file.php has been closed <br/>";