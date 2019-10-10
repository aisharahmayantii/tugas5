<!--PHP $ _POST secara luas digunakan untuk mengumpulkan data formulir setelah mengirimkan formulir HTML dengan metode = "post". $ _POST juga banyak digunakan untuk lulus variabel.
Contoh di bawah ini menunjukkan bentuk dengan field input dan sebuah tombol submit. Ketika pengguna mengirimkan data dengan mengklik "Submit", bentuk data dikirim ke file yang ditentukan dalam atribut aksi <form> tag. Dalam contoh ini, kita arahkan ke file itu sendiri untuk data formulir pengolahan. Jika Anda ingin menggunakan file PHP lain untuk memproses data formulir, menggantikan dengan nama file pilihan Anda. Kemudian, kita bisa menggunakan super variabel global $ _POST untuk mengumpulkan nilai dari field input-->

<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>

</body>
</html>
