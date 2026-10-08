# Mame:張士宏 <BR>
# SID: C113181105 <BR>
# EX05
<HR>
<?php
$total = 0;
for ($i = 0; $i <=15 ; $i++) {
    if ($i %2== 1) 
        continue;
    echo "|" . $i;
    $total  += $i ;
}
?>