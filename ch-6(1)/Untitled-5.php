<?php
function printHeader()
{
    echo "<h3>Name:張士宏</h3>";
    echo "<h3>SID: C113181105</h3>";
    echo "<h3>EX05</h3>";
    echo "<HR>";
}

function callunc1(closure $closure)
{
    $closure();
}
function callunc2(closure $callback){
    $callback();
}

$hello = function() {
    echo "hellow,world!<br/>";
};

printHeader();
function hi()
{
    echo "Hi,world!<br/>";
}
callunc1($hello);
?>