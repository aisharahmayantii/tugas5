<!--Informasi dapat dikirimkan ke fungsi melalui argumen. Argumen adalah seperti variabel.
Argumen ditentukan setelah nama fungsi, dalam tanda kurung. Anda dapat menambahkan sebanyak argumen yang Anda inginkan, hanya pisahkan dengan koma.
Contoh berikut memiliki fungsi dengan satu argumen ($ fname). Ketika fungsi familyName () dipanggil, kami juga menyampaikan nama (misalnya Jani), dan nama yang digunakan di dalam fungsi, yang output beberapa nama pertama yang berbeda, tapi nama belakang yang sama:-->
<!DOCTYPE html>
<html>
<body>

<?php
function familyName($fname) {
    echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
?>

</body>
</html>
