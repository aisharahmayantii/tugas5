<!--Gunakan switchpernyataan untuk memilih salah satu dari banyak blok kode yang akan dieksekusi-->
<!--cara kerjanya: Pertama kita memiliki ekspresi tunggal n (paling sering variabel), yang dievaluasi sekali. Nilai ekspresi ini kemudian dibandingkan dengan nilai-nilai untuk setiap kasus dalam struktur. Jika ada pertandingan, blok kode yang terkait dengan kasus yang dieksekusi. Gunakan breakuntuk mencegah kode dari berlari ke kasus berikutnya secara otomatis. The defaultpernyataan digunakan jika tidak ada yang cocok-->

<!DOCTYPE html>
<html>
<body>

<?php
$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
?>
 
</body>
</html>
