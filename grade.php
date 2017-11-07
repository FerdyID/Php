<?php
$inp= 55;

if ($inp > 100){
	echo "CURANG!! <br>Predikat nilai CUR";
}elseif($inp >= 90 && $inp <= 100){
	echo "Anda Lulus! dengan predikat A";
}elseif($inp >= 70 && $inp <= 89 ){
	echo "Anda Lulus! dengan predikat B";
}elseif($inp >= 60 && $inp <= 69){
	echo "Anda Lulus! dengan predikat C";
}elseif($inp >= 50 && $inp <= 59){
	echo "Anda  Tidak Lulus! dengan predikat D";
}elseif($inp >= 0 && $inp <= 49){
	echo "Anda  Tidak Lulus! dengan predikat E";
}else{
	echo "Anda  Tidak Lulus! dengan predikat Tidak mengikuti ujian";
}
?>