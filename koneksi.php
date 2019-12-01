<?php

$alamat = "localhost";
$username = "root";
$password = "";
$nama_database = "latihan_crud";

$database = new mysqli($alamat, $username, $password, $nama_database);

//cek koneksi apakah error atau tidak
if($database->connect_errno){
    echo "Koneksi ke database gagal dengan pesan : " . $database->connect_error;
}
