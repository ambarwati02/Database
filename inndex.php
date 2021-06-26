<?php 
include "config.php";


$sql = "SELECT * FROM `mahasiswa` WHERE  `NIM` = '20190801465'";
$sql2 = "SELECT * FROM `matkul` WHERE `Nama_Mk`= 'Kalkulus'";
$hasil = $koneksi->query($sql);
$hasil2 = $koneksi->query($sql2);
$Nama = "";
$NIM = "";
$Tlp = "";
$Alamat = "";
$Nama_Mk = "";

while($data = $hasil->fetch_array()){
    $Nama = $data['Nama'];
    $NIM = $data['NIM'];
    $Alamat = $data['Alamat'];
    $Tlp = $data['Tlp'];
    
}
while($data = $hasil2->fetch_array()){
    
    $Nama_Mk = $data['Nama_Mk'];
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nama : <?php echo $Nama?> </h1>
    <h1>Nim : <?php echo $NIM?></h1>
    <h1>Alamat : <?php echo $Alamat?> </h1>
    <h1>Tlp : <?php echo $Tlp?></h1>
    <h1>Nama_Mk : <?php echo $Nama_Mk?></h1>
</body>
</html>
