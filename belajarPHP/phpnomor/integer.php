<!--PHP integer-->
<!--PHP memiliki fungsi sebagai berikut untuk memeriksa apakah jenis variabel adalah integer:
 is_int ()
 is_integer () - alias is_int ()
 is_long () - alias is_int ()-->
 <!DOCTYPE html>
<html>
<body>

<?php
// Check if the type of a variable is integer   
$x = 5985;
var_dump(is_int($x));

echo "<br>";

// Check again... 
$x = 59.85;
var_dump(is_int($x));
?>  

</body>
</html>
