<?php
include 'koneksi.php';
$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM kamar WHERE id='$id'");

if($query){
    header("Location: index2.php");
} else {
    echo "Gagal menghapus data!";
}
?>