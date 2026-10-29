<?php
require("about_me.php");
echo"EX01";
$str1 = "PHP and MySQL Wed Programming";
$str2 = "PHP 與MySQL網頁設計範例教本";

echo "測試英文字串1: " . $str1 . "\"<br/>";
echo "測試中文字串2: " . $str2 . " \"<br/>";

echo "English string length: " . strlen($str1) . "<br/>";
echo "Chinese string length: " . strlen($str1) . "<br/>";

echo "Lower Case: " . strtolower($str1) . "<br/>";
echo "Upper Case: " . strtoupper($str1) . "<br/>";

echo "Remove whitespace from both ends: \"" . trim($str2) . "\"<br/>";
echo "Remove whitespace from start: \"" . ltrim($str2) . "\"<br/>";
echo "Remove whitespace from end: \"" . rtrim($str2) . "\"<br/>";
echo "Remove whitespace from end: \"" . chop($str2) . "\"<br/>";