<?php
function printHeader()
{
    echo "<h3>Name:張士宏</h3>";
    echo "<h3>SID: C113181105</h3>";
    echo "<h3>EX02</h3>";
    echo "<HR>";
}

function rateExchange($amout,$rate)
{
    $result = $amout * $rate;
    return $result;
}

$rate = rateExchange(100, 32.5);
printHeader();
echo "Money:".$rate;
?>