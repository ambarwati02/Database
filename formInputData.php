<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="formInputData.php" methode="POST">
    <label for="nama">Nama Mahasiswa</label>
    <input type="text" name="nama"><br>
    <label for="nim">Nim Mahasiswa</label>
    <input type="text"><br>
    <input type="submit" value="submit" name="jenis"><br>
    </form>
</body>
</html>

<?php 
include"config.php;

$nama = $_POST['nama'];
echo $nama;
echo $nim;

if ($koneksi->query($sql) === TRUE){

    echo 'success';
}
else {
    echo $koneksi->error;
}


?>