<!--The foreachLoop bekerja hanya pada array, dan digunakan untuk loop melalui setiap pasangan kunci / nilai dalam array-->
<!--Untuk setiap iterasi loop, nilai elemen array saat ditugaskan untuk $ value dan array pointer digerakkan oleh satu, hingga mencapai elemen array terakhir.
Contoh berikut menunjukkan sebuah loop yang akan menampilkan nilai-nilai dari array yang diberikan ($ warna)-->
<!DOCTYPE html>
<html>
<body>

<?php  
$colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $value) {
  echo "$value <br>";
}
?>  

</body>
</html>
