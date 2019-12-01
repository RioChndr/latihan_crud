<?php

class mobil{
    public $ban = 4;
    public $warna = "biru";
    public $pintu = 4;
    private $nama = "bmw"; //public, private, protected

    function jalan(){
        echo "mobil ".$this->nama." berjalan";
    }

    function set_nama($nama_baru){
        $this->nama = $nama_baru;
        echo "nama baru sudah di set, dengan nama ".$nama_baru;
    }
    function cek_data(){
        echo "nama : ".$this->nama."<br>";
        echo "warna : ".$this->warna."<br>";
        echo "pintu : ".$this->pintu."<br>";
        echo "ban : ".$this->ban."<br>";
    }
    function get_nama(){
        return $this->nama;
    }
}

$toyota = new mobil();
$toyota->set_nama("toyota");
$toyota->warna = "merah";
$toyota->ban = 10;

$nama_mobil = $toyota->get_nama();
echo $nama_mobil;
// $toyota->cek_data();