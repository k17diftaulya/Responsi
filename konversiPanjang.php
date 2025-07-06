<?php

//
function konversi($nilai, $asal, $tujuan) {
    $keMeter = [
        "m"  => 1,
        "cm" => 0.01,
        "km" => 1000,
        "mm" => 0.001,
        "in" => 0.0254,
        "ft" => 0.3048
    ];
    if (!isset($keMeter[$asal], $keMeter[$tujuan])) {
        return "Satuan tidak valid";
    }
    $nilaiMeter = $nilai * $keMeter[$asal];
    return round($nilaiMeter / $keMeter[$tujuan], 4);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    echo konversi($_POST["nilai"] ?? 0, $_POST["asal"] ?? "", $_POST["tujuan"] ?? "");
}
?>