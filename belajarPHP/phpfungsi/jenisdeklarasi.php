<!--PHP 7 juga mendukung Ketik Deklarasi untuk return pernyataan. Seperti dengan deklarasi tipe untuk argumen fungsi, dengan memungkinkan persyaratan yang ketat, itu akan melempar "Kesalahan Fatal" pada jenis ketidakcocokan.
Untuk menyatakan tipe untuk fungsi kembali, menambahkan usus ( :) dan jenis yang tepat sebelum pembukaan keriting ( {) braket ketika mendeklarasikan fungsi.
Pada contoh berikut kita tentukan jenis kembali untuk fungsi-->
<?php declare(strict_types=1); // strict requirement
function addNumbers(float $a, float $b) : float {
    return $a + $b;
}
echo addNumbers(1.2, 5.2); 
?>
