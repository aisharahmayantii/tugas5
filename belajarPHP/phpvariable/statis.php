<!--PHP Statis kata kunci-->
<!--Biasanya, ketika fungsi selesai / dieksekusi, semua variabel yang akan dihapus. Namun, terkadang kita ingin variabel lokal tidak akan dihapus. Kami membutuhkannya untuk pekerjaan lebih lanjut.
Untuk melakukan hal ini, gunakan statickata kunci ketika Anda pertama kali mendeklarasikan variabel:-->
<!DOCTYPE html>
<html>
<body>

<?php
function myTest() {
    static $x = 0;
    echo $x;
    $x++;
}

myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
?> 

</body>
</html>
