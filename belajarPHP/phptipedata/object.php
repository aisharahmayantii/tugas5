<!--Sebuah objek adalah tipe data yang menyimpan data dan informasi tentang cara mengolah data tersebut.
Dalam PHP, sebuah objek harus secara eksplisit dinyatakan.
Pertama kita harus mendeklarasikan kelas objek. Untuk ini, kami menggunakan kata kunci class. Sebuah kelas adalah struktur yang dapat berisi properti dan metode:-->
<!DOCTYPE html>
<html>
<body>

<?php
class Car {
    function Car() {
        $this->model = "VW";
    }
}
// create an object
$herbie = new Car();

// show object properties
echo $herbie->model;
?>

</body>
</html>
