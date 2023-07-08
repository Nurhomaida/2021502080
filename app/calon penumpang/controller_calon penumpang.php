<?php
require "../../config/config_database.php";
$db = koneksi(hostname, username, password, database);

$NIK = $_POST['NIK'];
$Nama = $_POST['Nama'];

$query = $db->query("INSERT INTO prodi (NIK, Nama)
                VALUES ($NIK','$Nama')");
if($query){
    echo "<script>
    alret('Data sukses disimpan');
    window.location.href='list_calon penumpang.php';
    </script>";
}
else{
    echo "<script>
    alret('Data gagal disimpan');
    window.location.href='form_calon penumpang.php';
    </script>";
}