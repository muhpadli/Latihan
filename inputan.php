<?php
echo "berikut predikat anda berdasarkan nilai yang diperoleh!";
echo "<br />";
$nama = $_POST["nama"];
echo "Nama : $nama";
$nilai = $_POST["nilai"];
if ($nilai >= 85 and $nilai <= 100) {
    $predikat = "Predikat A";
} elseif ($nilai >= 75 and $nilai <= 84) {
    $predikatt = "Predikat B";
} elseif ($nilai >= 65 and $nilai <= 74) {
    $predikat = "Predikat C";
} elseif ($nilai >= 55 and $nilai <= 64) {
    $predikat = "Predikat D";
} else {
    $predikat = "Predikat E";
}
echo "<br />";
echo "Predikat yang diperoleh $nama adalah $predikat";
