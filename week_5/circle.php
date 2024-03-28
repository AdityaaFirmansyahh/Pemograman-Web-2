<?php 
class Lingkaran{
    public $jarijari;
    const PHI = 3.14;

    public function __construct($jari){
        $this->jarijari = $jari;
    }

    public function luas(){
        $luas = self::PHI * $this->jarijari ^ 2;
        return $luas;
    }

    public function keliling(){
        $keliling = 2 * self::PHI * $this->jarijari;
        echo ' Keliling dari lingkaran dengan jari jari ' . $this->jarijari . ' adalah ' . $keliling;
    }
}

?>
