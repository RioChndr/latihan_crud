<?php
if(empty($_POST)){
    echo "tidak ada data yang dikirim";
}
include("koneksi.php");

$id = $_POST['id'];
$nama = $_POST['nama_pekerjaan'];
$ket = $_POST['keterangan_pekerjaan'];

$query = $database->query("update list_todo set nama_pekerjaan='$nama', keterangan='$ket' where id='$id'");
if(!$query){
    //jika gagal
    echo $database->error;
}else{
    header("location: lihat_data.php");
}
