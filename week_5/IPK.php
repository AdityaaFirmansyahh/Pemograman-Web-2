<?php 
require_once('Mahasiswa.php');
class IPK extends Mahasiswa {
    public $ipk;
    public function __construct($nim, $nama, $prodi,$tahunAngkatan, $ipk) {
        $this->ipk = $ipk;
        parent::__construct($nim, $nama, $prodi, $tahunAngkatan);
    }

    public function getInfo() {
        parent::getInfo();
        echo "IPK : " . $this->ipk . "<br>";
        echo "Predikat : " . $this->Predikat() . "<br>";
    }

    public function Predikat(){
        if ($this->ipk < 2.0){
            return "Cukup";
        } elseif ($this->ipk >= 2.0 and $this->ipk < 3.0){
            return "Baik";
        }
        elseif ($this->ipk >= 3.0 and $this->ipk < 3.75){
            return "Memuaskan";
        }
        elseif ($this->ipk >= 3.75){
            return "Cumlaude";
        }
        else {
            return "Error";
        }
    }
}
$mahasiswa = new IPK("0110223189", "Aditya Firmansyah", "Teknik Informatika", "2023", 3.9);
$mahasiswa->getInfo();
?>