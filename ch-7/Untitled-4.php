<?php
include("about_me.php");
echo "EX04<br/>";
$ip = $_SERVER["REMOTE_ADDR"];
echo "IP ADDRESS:" . $ip . "<br/>";
$path = $_SERVER["SCRIPT_NAME"];
echo"PATH" . $path . "";
?>
<Table border="1">
    <tr>
        <td>值</td>
        <td>Value</td>
    </tr>
    <?php
    foreach ($_SERVER as $key => $value) {
        echo "<tr><td>" . $key . "</td>";
        echo "<td>" . $value . "</td></tr>";
    }
    ?>
</Table>
