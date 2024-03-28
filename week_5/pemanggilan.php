<?php 
require_once( 'circle.php' );
require_once( 'rectangle.php' );

$lingkaran1 = new Lingkaran(8);

echo "Luas Lingkaran tersebut adalah" . $lingkaran1->luas();
echo "<br>";
$lingkaran1->keliling();

$persegiPanjang = new persegiPanjang(10, 8);
echo "<br>";
echo "Luas Persegi Panjang tersebut adalah" . $persegiPanjang->getLuas();
echo "<br>";
echo "Keliling Persegi Panjang tersebut adalah" . $persegiPanjang->getKkeliling();
?>