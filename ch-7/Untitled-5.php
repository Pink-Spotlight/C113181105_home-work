<?php
$arr = array("Color"=>"Black", "name"=>"張士宏","Shape" =>"Triangle",100);

$arr["type"] = "PHP";
foreach ($arr as $key => $value) {
    echo "$key = >$value";
}