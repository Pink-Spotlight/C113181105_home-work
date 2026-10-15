<?php
function printHeader()
{
    echo "<h3>Name:張士宏</h3>";
    echo "<h3>SID: C113181105</h3>";
    echo "<h3>EX06</h3>";
    echo "<HR>";
}

printHeader();
$weight = 75;
$bmi = function ($height) use ($weight) {
$height = $height / 100.0;
return $weight/$height/$height;
};
$h = 175;
echo "BMI = ". $bmi($h) . "<br/>";
?>