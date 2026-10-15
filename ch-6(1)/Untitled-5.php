<?php
function printHeader()
{
    echo "<h3>Name:張士宏</h3>";
    echo "<h3>SID: C113181105</h3>";
    echo "<h3>EX05</h3>";
    echo "<HR>";
}

function callFunc1(closure $closure)
{
    $closure();
}
function callFunc2(callable $callable){
    $callable();
}

$hello = function() {
    echo "hellow,world!<br/>";
};

printHeader();
function hi()
{
    echo "Hi,world!<br/>";
}
callFunc1($hello);
callFunc2("hi");
callFunc2($hello);
?>