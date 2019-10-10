<!--The do...whileLoop akan selalu mengeksekusi blok kode sekali, maka ia akan memeriksa kondisi, dan ulangi loop sementara kondisi yang ditentukan benar-->
<!DOCTYPE html>
<html>
<body>

<?php 
$x = 1;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);
?>

</body>
</html>
