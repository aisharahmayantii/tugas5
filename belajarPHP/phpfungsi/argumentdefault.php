<!--Contoh berikut menunjukkan bagaimana menggunakan parameter default. Jika kita memanggil fungsi setHeight () tanpa argumen dibutuhkan nilai default sebagai argumen-->
<?php declare(strict_types=1); // strict requirement ?>
<!DOCTYPE html>
<html>
<body>

<?php
function setHeight(int $minheight = 50) {
    echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight();
setHeight(135);
setHeight(80);
?>

</body>
</html>
