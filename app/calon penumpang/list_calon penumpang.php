<?php
require "../../config/config_database.php";
$db = koneksi(hostname, username, password, database);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data calon penumpang</title>
</head>

<body>
    <a href="form_calon penumpang.php">Tambah Data</a>
    <?php
    $query = $db->$query("SELECT * FORM calon penumpang");
    ?>
    <table>
        <thead>
        <tr>
            <th>No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Act</th>
        </tr>
        </thead>
        <body>
            <?php
            while($row = $query->fetch_array()){
                ?>
                <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $row['NIK'];?></td>
                    <td><?php echo $row['Nama'];?></td>
                    <td>Edit | Hapus</td>
                </tr>
                <?php
            }
            ?>
        </body>
    </table>
</body>
</html>
