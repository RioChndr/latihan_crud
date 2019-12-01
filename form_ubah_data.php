<html>
    <head>
        <title>Belajar mysqli</title>
    </head>
    <body>
    <?php
    include("koneksi.php");
    if(!isset($_GET['id'])){
        echo "tidak ada id yang terpilih."; 
        die();
    }
    $id = $_GET['id'];
    $query = $database->query("select * from list_todo where id='$id'");
    
    $data = $query->fetch_assoc();
    ?>
        <form action="update_data.php" method="POST">
            <h1>Form </h1> <br>
            <input type="hidden" name='id' value='<?= $data['id']?>'>
            <input type="text"
                    name='nama_pekerjaan'
                    placeholder="Nama pekerjaan"
                    value='<?= $data['nama_pekerjaan']?>'> <br>
            <input type="text"
                    name='keterangan_pekerjaan' 
                    placeholder="Keterangan pekerjaan" 
                    value='<?= $data['keterangan']?>'> <br>
            <button type="submit">Kirim</button>
        </form>
    </body>
</html>