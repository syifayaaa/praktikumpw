<?php
class Dispenser{
    protected $volume;
    protected $hargaSegelas;
    const volume = 250;
    public $namaMinuman;

    function set_volumeGalon($v){
        return $this->volG = $v;
    }
    function set_hargaSegelas($h){
        return $this->harga = $h;
    }
    function get_volumeGelas(){
        return self::volume;
    }
    function get_volume(){
        return $this->volG - self::volume;
    }
}
$dispen = new Dispenser();
echo 'Nama Minuman ' .$dispen -> namaMiuman = 'Aqua';
echo "<hr>";
echo 'Volume galonnya adalah ' .$dispen -> set_volumeGalon(1000) .' Ml';
echo "<br>";
echo 'Harga segelasnya adalah ' .$dispen -> set_hargaSegelas('3000 Rupiah');
echo "<br>";
echo 'Andi beli air satu gelas yang volumenya ' .$dispen -> Get_volumeGelas() .' Ml';
echo "<br>";
echo 'Hasil volume sekarang adalah ' .$dispen -> get_volume() .' Ml';
?>