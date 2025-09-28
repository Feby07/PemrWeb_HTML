<?php
function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam.", <br/>";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

perkenalan("Handana", "Hallo");

echo "<hr>";

$saya = "Elok";
$ucapanSalam = "Selamat pagi";

perkenalan($saya, $ucapanSalam);

echo "<hr>";

perkenalan($saya);
?>
