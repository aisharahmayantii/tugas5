<!--Untuk loop melalui dan mencetak semua nilai-nilai array diindeks, Anda bisa menggunakan forlingkaran, seperti ini-->
<!DOCTYPE html>
<html>
<body>

<?php
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
?>

</body>
</html>
