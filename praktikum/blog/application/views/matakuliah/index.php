<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matakuliah</title>
</head>
<?php
$username = $this->session->userdata('username');
if($username){
    echo "<h2>Selamat Datang $username</h2>";
}
?>
<body>
    <div class="col-md-12">
    <h3>Matakuliah</h3>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>SKS</th>
                <th>Kode</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($matakuliah as $matkul) {
            ?>
            <tr>
                <td><?php echo $matkul -> nama ?></td>
                <td><?php echo $matkul -> sks ?></td>
                <td><?php echo $matkul -> kode ?></td>
                <td>
                    <a href= <?php echo base_url("index.php/matakuliah/edit/$matkul->id") ?> 
                    class="btn btn-success btn-lg active" >Update</a>
                    &nbsp; 
                    <a href= <?php echo base_url("index.php/matakuliah/delete/$matkul->id") ?> 
                    class="btn btn-danger btn-lg active" 
                    onclick=" return hapusMatakuliah('Apakah Anda yakin ingin menghapus matakuliah yang bernama <?php echo $matkul-> nama ?> ?')" >Delete</a>
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
    <a href= <?php echo base_url("index.php/matakuliah/form") ?> class="btn btn-primary btn-lg active" >Add</a>
    </div>
</body>
</html>