<!--menggunakan kata kunci Global untuk mengakses variable global dari dalam fungsi<!DOCTYPE html-->
<html>
<body>

<?php
$x = 5;
$y = 10;

function myTest() {
    global $x, $y;
    $y = $x + $y;
} 

myTest();  // run function
echo $y; // output the new value for variable $y
?>

</body>
</html>
