<?php
// contoh function tidak menggunakan parameter
function nama (){
    $nama = "Syifa";
    echo "Nama Saya adalah $nama";
};
// contoh fungction menggunakan parameter
function umur_kelas($age){
    $umur = $age - 2022;
    $kelas = "SI10";
    echo "<br> Umur saya sekarang adalah $umur <br> Saya Kelas $kelas";
};
nama();
umur_kelas(2003);
?>