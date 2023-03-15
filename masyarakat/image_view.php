
<?php
session_start();
error_reporting(0);
include '../conn/koneksi.php';
if(isset($_GET['id_pengaduan'])) 
{
    $query = mysqli_query($koneksi,"select * from pengaduan where 	id_pengaduan='".$_GET['	id_pengaduan']."'");
    $row = mysqli_fetch_array($query);
    header("Content-type: " . $row["tipe_gambar"]);
    echo $row["gambar"];
}
else
{
    header('location:index.php');
}
?>