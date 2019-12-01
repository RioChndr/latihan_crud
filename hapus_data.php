<?php
if(empty($_GET)){
    //jika link TIDAK berupa hapus_data.php?id=xxx
    echo "tidak ada id yang dipilih";
    die();
}
include("koneksi.php");
$id = $_GET['id'];

$query = $database->query("delete from list_todo where id = '$id'");

if(!$query){
    //jika gagal
    echo $database->error;
}else{
    header("location: lihat_data.php");
}
