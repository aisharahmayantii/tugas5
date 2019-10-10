<!--PHP NaN-->
<!--NaN singkatan Tidak Nomor.
NaN digunakan untuk operasi matematika tidak mungkin.
PHP memiliki fungsi sebagai berikut untuk memeriksa apakah nilai yang bukan angka:

    - is_nan ()

Namun, PHP var_dump () mengembalikan fungsi tipe data dan nilai:-->
<!DOCTYPE html>
<html>
<body>

<?php
// Invalid calculation will return a NaN value
$x = acos(8);
var_dump($x);
?>  

</body>
</html>
