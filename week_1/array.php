<?php 
$ar_array = array("Budi", "Andi", "Caca");
$ar_array2 = array("Budi", "Andi", "Caca");
print_r($ar_array);
echo "<br>";
echo $ar_array[1];
echo "<br>";
foreach ($ar_array as $key => $value) {
    echo $key . "=" . $value . "<br>";
}
echo "jumlah data dalam array adalah" . count($ar_array);
echo "<br>";

// Menambahkan array
$ar_array["3"] = "Dodi";

// Menghapus array
// unset($ar_array[1]);
print_r($ar_array);

// Mengurutkan array
sort($ar_array);
echo "<br>";
print_r($ar_array);
echo "<br>";
// Menghapus array bagian akhir
array_pop($ar_array);
print_r($ar_array);
echo "<br>";
// Menambahkan array menggunakan push
array_push($ar_array, "Lia");
print_r($ar_array);