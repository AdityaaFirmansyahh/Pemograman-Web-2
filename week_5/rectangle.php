<?php 
class PersegiPanjang{
    public $Panjang;
    public $Lebar;

    public function __construct($Panjang, $Lebar){
        $this->Panjang = $Panjang;
        $this->Lebar = $Lebar;
    }

    public function getLuas(){
        $luas = $this->Panjang * $this->Lebar;
        echo 'Luas dari persegi panjang dengan panjang ' . $this->Panjang . ' dan lebar ' . $this->Lebar ;
        return $luas;
    }

    public function getKkeliling(){
        $keliling = 2 * ($this->Panjang + $this->Lebar);
        echo 'Keliling dari persegi panjang dengan panjang ' . $this->Panjang . ' dan lebar ' . $this->Lebar ;
        return $keliling;
    }
}

?>
