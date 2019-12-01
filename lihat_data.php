<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lihat data</title>
</head>
<body>
    <h2>List Pekerjaan saya</h2> 
    <a href="form_tambah_data.html">Tambah data</a> <br>

    <?php
    include("koneksi.php");
    $query = $database->query("select * from list_todo");

    if($query->num_rows > 0){

        while($data = $query->fetch_assoc()){
            $nama = $data['nama_pekerjaan'];
            $keterangan = $data['keterangan'];
            echo "<li>$nama, $keterangan 
                <a href='form_ubah_data.php?id=".$data['id']."'>[Edit]</a> | 
                <a href='hapus_data.php?id=".$data['id']."'>[Delete]</a>
                </li>";
        }
    }else{
        echo "tidak ada data";
    }
    ?>
</body>
</html>