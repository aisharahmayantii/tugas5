<!-- Lihatlah contoh di bawah ini; hanya pernyataan pertama akan menampilkan nilai dari $colorvariabel! Hal ini karena $color, $COLOR, dan $coLORdiperlakukan sebagai tiga variabel yang berbeda:
dan saya tambahkan sendiri $warna dengan "brown"-->
<!DOCTYPE html>
<html>
<body>

<?php
$color = "red";
$warna = "brown";
echo "My car is " . $color . "<br>";
echo "My house is " . $warna . "<br>";
echo "My boat is " . $coLOR . "<br>";
?> 

</body>
</html>