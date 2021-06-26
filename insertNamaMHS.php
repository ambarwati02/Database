<?php 
include "config.php";

$nama = $_POST['Nama'];
$nim = $_POST['NIM'];
$alamat = $_POST['Alamat'];
$tlp = $_POST['Tlp'];

$sql = ("INSERT INTO `mahasiswa`(`NIM`, `Nama`, `Alamat`, `Tlp`) VALUES ('$nama', '$nim', '$alamat', '$tlp')");
$hasil = $koneksi ->query($sql);

if ($koneksi->query($sql) === TRUE){
    //ECHO "New record created succesfully";
    echo 'success';
}
else {
    echo $koneksi->error;
}




?>