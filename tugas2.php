<?php
$pilih = "genap";
$n=10;
$jGenap=0;
$jGanjil=0;
$jumlah=0;

switch ($pilih){
	case "genap" :
		for ($i=1; $i <= $n; $i++){
			if($i % 2 == 0 && $i != 4){
				$jGenap++;
//				echo $i . "<br>";
				$jumlah+=$i;				
			}
		}
		echo "Jumlah bilangan genap dari 1 sampai " . $n . " = " . $jGenap;
		echo "<br>Jumlah total = " . $jumlah;
		echo "<br>Rata - rata  = " . $jumlah/$jGenap;
	break;
	case "ganjil" : 
		for ($i=1; $i <= $n; $i++){
			if($i % 2 == 1){
				$jGanjil++;
				$jumlah+=$i;
			}
		}
		echo "Jumlah bilangan ganjil dari 1 sampai " . $n . " = " . $jGanjil;
		echo "<br>Jumlah total = " . $jumlah;
		echo "<br>Rata - rata  = " . $jumlah/$jGanjil;
	break;
	}
?>
