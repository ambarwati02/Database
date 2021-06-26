<?php 
$host = "localhost";
$username = "root";
$password = "";
$namaDb = "Kampus";

//buat koneksi
$koneksi = new mysqli($host,$username,$password,$namaDb);


//cek koneksi
// if($koneksi->connect_error){
//     die("Koneksi tidak berhasil".$koneksi->connect_error);
// }
    
// else{
//     echo "Koneksi berhasil";
// }


?>
