<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik < 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

echo "<br><br>";
?>

<?php
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";
echo "<br><br>";
?>

<?php
$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";
echo "<br><br>";
?>

<?php
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor";
echo "<br><br>";
?>

<?php
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}
echo "<br><br>";
?>

<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

$totalNilai = array_sum($nilaiSiswa);
$nilaiTertinggi = max($nilaiSiswa);
$nilaiTerendah = min($nilaiSiswa);

$totalNilaiSetelah = $totalNilai - $nilaiTertinggi - $nilaiTerendah;
$rataRata = $totalNilaiSetelah / (count($nilaiSiswa) - 2);

echo "Total Nilai: $totalNilai <br>";
echo "Nilai Tertinggi: $nilaiTertinggi <br>";
echo "Nilai Terendah: $nilaiTerendah <br>";
echo "Rata-rata (setelah mengabaikan nilai tertinggi & terendah): $rataRata";
echo "<br><br>";
?>

<?php
$hargaProduk = 120000;
$diskon = 0.20;
$hargaAkhir = $hargaProduk;

if ($hargaProduk > 100000) {
    $hargaAkhir = $hargaProduk - ($hargaProduk * $diskon);
}

echo "Harga produk sebelum diskon: Rp $hargaProduk <br>";
echo "Harga yang harus dibayar setelah diskon: Rp $hargaAkhir";
echo "<br><br>";
?>

<?php
$skorPemain = 550;

echo "Total skor pemain adalah: $skorPemain <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? " . 
     ($skorPemain > 500 ? "YA" : "TIDAK");
echo "<br><br>";
?>