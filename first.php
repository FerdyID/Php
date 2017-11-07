<?php
// $hallo = "Hallo World!";

/**
 * ini adalah coment
 * tidak ditampilkan
 */

// $x = 5 /** 5 + 5 */ +5;
// echo $hallo . $x;
// $num=15.8;
// var_dump($num);

$t = date("H");
if ($t >= "2") {
    echo "Have a nice day <br> gg";
}elseif($t == "5"){
    echo "Have a beautifully day";
}else{
    echo "Have a bad day";
}
?>