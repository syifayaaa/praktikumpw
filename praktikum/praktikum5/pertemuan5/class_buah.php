<?php
// class buah
class buah {
    // buat property
    public $name;
    protected $color;
    private $berat;

    // buat method
    public function set_color($c){
        return $this->color = $c;
    }
    public function set_berat($b){
        return $this->berat = $b;
    }
}
// buat object
$mangga = new buah();
echo $mangga -> name = 'Mangga';
echo "<br>";
echo $mangga -> set_color('Hijau');
echo "<br>";
echo $mangga -> set_berat('300kg');
?>