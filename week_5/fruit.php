<?php 
class Fruit {
    public $name = "mangga";
    const Jenis = "buah";

    public function __construct($_name) 
    {
        $this->name = $_name;
    }

    public function getName()
    {
        echo self::Jenis . " namanya " . $this->name;
    }
}

$mangga = new Fruit("apel");
echo $mangga->getName();
?>