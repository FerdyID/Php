<?php
$script = "<script>alert('Selamat datang maz!')</script>";
echo $script;

/**
 * !empty($_GET['gender']) = memanggil kasus/case agar bisa dieksekusi via url
 * 
 */


$gender = (!empty($_GET['gender'])) ? $_GET['gender'] : null;
$condition = (!empty($_GET['condition'])) ? $_GET['condition'] : null;
switch ($gender){
    case 'boy': 
        if ($condition == 'boy'){
            echo "boy";
        }elseif ($condition == 'girl'){
            echo "girl";
        }else {
            echo "Youre gay";
        }
    break;
    case 'girl':
        echo "Im pretty";
    break;
    default:
        echo "ggwp";
}


?>