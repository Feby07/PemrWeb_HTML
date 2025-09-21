<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali   = $a * $b;
$hasilBagi   = $a / $b;
$sisaBagi    = $a % $b;
$pangkat     = $a ** $b;

echo "Nilai a = $a <br>";
echo "Nilai b = $b <br><br>";

echo "Hasil Tambah (a + b) = $hasilTambah <br>";
echo "Hasil Kurang (a - b) = $hasilKurang <br>";
echo "Hasil Kali (a * b) = $hasilKali <br>";
echo "Hasil Bagi (a / b) = $hasilBagi <br>";
echo "Sisa Bagi (a % b) = $sisaBagi <br>";
echo "Pangkat (a ** b) = $pangkat <br>";

echo "<br>";
?>

<?php
$a = 10;
$b = 5;

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "a == b : "; var_dump($hasilSama); echo "<br>";
echo "a != b : "; var_dump($hasilTidakSama); echo "<br>";
echo "a < b  : "; var_dump($hasilLebihKecil); echo "<br>";
echo "a > b  : "; var_dump($hasilLebihBesar); echo "<br>";
echo "a <= b : "; var_dump($hasilLebihKecilSama); echo "<br>";
echo "a >= b : "; var_dump($hasilLebihBesarSama); echo "<br>";

echo "<br>";
?>

<?php
$a = 10;
$b = 5;

$hasilAnd = $a && $b;
$hasilOr  = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "a && b : "; var_dump($hasilAnd); echo "<br>";
echo "a || b : "; var_dump($hasilOr); echo "<br>";
echo "!a     : "; var_dump($hasilNotA); echo "<br>";
echo "!b     : "; var_dump($hasilNotB); echo "<br>";

echo "<br>";
?>

<?php
$a = 10;
$b = 5;

$hasilTambah = $a += $b;
$hasilKurang = $a -= $b;
$hasilKali   = $a *= $b;
$hasilBagi   = $a /= $b;
$hasilSisa   = $a %= $b;

echo "a += b : $hasilTambah <br>";
echo "a -= b : $hasilKurang <br>";
echo "a *= b : $hasilKali <br>";
echo "a /= b : $hasilBagi <br>";
echo "a %= b : $hasilSisa <br>";

echo "<br>";
?>

<?php
$a = 10;
$b = 5;

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "a === b : "; var_dump($hasilIdentik); echo "<br>";
echo "a !== b : "; var_dump($hasilTidakIdentik); echo "<br>";

echo "<br>";
?>





