<?php 
class Mahasiswa{
    public $nim;
    public $nama;
    public $prodi;
    public $tahunAngkatan;

    public function __construct($nim, $nama, $prodi, $tahunAngkatan){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->tahunAngkatan = $tahunAngkatan;
    }

    public function getInfo() {
        echo "NIM $this->nim" . "<br>";
        echo "Nama adalah $this->nama" . "<br>";
        echo "Prodi $this->prodi" . "<br>";
        echo"Tahun Angkatan $this->tahunAngkatan" . "<br>";
    }
}

?>
