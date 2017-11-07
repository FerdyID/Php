<?php
// menyimpan data kedalam variabel
$nim            = $_POST['nim'];
$nama           = $_POST['nama'];
$jurusan        = $_POST['jurusan'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$alamat         = $_POST['alamat'];
// query SQL untuk insert data
echo "Nim     = " . $nim . "<br>";
echo "Nama    = " . $nama . "<br>";
echo "Jurusan = " . $jurusan . "<br>";
echo "Kelamin = " . $jenis_kelamin . "<br>";
echo "ALamat  = " . $alamat . "<br>";
// mengalihkan ke halaman index.php
// header("location:index.php");
?>