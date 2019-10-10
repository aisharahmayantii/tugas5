<!--Untuk loop melalui dan mencetak semua nilai-nilai array asosiatif, Anda bisa menggunakan foreachlingkaran, seperti ini-->
<!DOCTYPE html>
<html>
<body>

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>

</body>
</html>
