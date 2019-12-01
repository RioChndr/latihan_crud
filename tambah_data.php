<?php
include("koneksi.php");

$nama_pekerjaan = $_POST['nama_pekerjaan'];
$keterangan_pekerjaan = $_POST['keterangan_pekerjaan'];

$query_tambah_data = "insert into list_todo (nama_pekerjaan, keterangan) values ('$nama_pekerjaan', '$keterangan_pekerjaan')";
$query = $database->query($query_tambah_data);
if(!$query){
    echo $database->error;
}
//pindah ke halaman lihat_data.php
header('location: lihat_data.php');