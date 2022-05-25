<?php
require_once 'libfungsi.php';
$proses = $_POST['proses'];
$nama_siswa = $_POST['name'];
$mata_kuliah =$_POST['matkul'];
$uts = $_POST['nilai_uts'];
$uas = $_POST['nilai_uas'];
$tugas = $_POST['nilai_tugas'];
$total = $uts + $uas + $tugas;
$_nilai = $total/3;
$hasil_ujian = kelulusan($_nilai);
// menampilkan grade menggunakan elseif
$peringkat = grade($_nilai);

// menampilkan data
echo "Nama : $nama_siswa";
echo "<br/>Mata Kuliah : $mata_kuliah";
echo "<br/>Nilai UTS : $uts";
echo "<br/>Nilai UAS : $uas";
echo "<br/>Nilai Tugas : $tugas";
echo "<br/>Grade : $peringkat";
    // echo "<br/>Keterangan : $lulus";
    // echo "<br/>Grade : $grade";
echo "<br/>Keterangan : $hasil_ujian";
echo "<br/>Data Telah di $proses";


// switch ($grade) {
//   case "E":
//     echo "Sangat Kurang";
//     break;
//   case "D":
//     echo "Kurang";
//     break;
//   case "C":
//     echo "Cukup";
//     break;
//   case "B":
//     echo "Memuaskan";
//     break;
//   case "A":
//     echo "Sangat Memuaskan";
//     break;
//   default:
//     echo "I(tidak ada nilai)";
// }
?>