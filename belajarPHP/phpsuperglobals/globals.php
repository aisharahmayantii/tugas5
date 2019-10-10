<!--$ GLOBALS adalah PHP variabel global super yang digunakan untuk mengakses variabel global dari mana saja di script PHP (juga dari dalam fungsi atau metode).
Toko PHP semua variabel global dalam sebuah array disebut $ GLOBALS [ index ]. The Indeks memegang nama variabel.
Contoh di bawah ini menunjukkan bagaimana menggunakan super variabel global $ GLOBALS-->
<!DOCTYPE html>
<html>
<body>

<?php 
$x = 75;
$y = 25; 

function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;
?>

</body>
</html>
