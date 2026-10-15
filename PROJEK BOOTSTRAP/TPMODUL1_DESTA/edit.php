<?php
include 'koneksi.php';
$id = $_GET['id'] ?? null;

$query = mysqli_query($koneksi, "SELECT * FROM kamar WHERE id = '$id'");
$data = mysqli_fetch_assoc($query);


if (isset($_POST['update'])) {
    $tipe = $_POST['tipe'];
    $nama = $_POST['nama'];
    $fasilitas = $_POST['fasilitas'];
    $uk_ruangan = $_POST['uk_ruangan'];
    $harga = $_POST['harga'];

    $update_query = mysqli_query($koneksi, "UPDATE kamar SET tipe='$tipe', nama='$nama', fasilitas='$fasilitas', uk_ruangan='$uk_ruangan', harga='$harga' WHERE id='$id'");

    
    if ($update_query) {
        header("Location: index2.php");
        exit();
    } else {
        echo "<script>alert('Gagal mengupdate data!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Kamar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <div class="container">
        <h2>Edit Data Kamar</h2>

        <form action="" method="post">
            <div class="mb-3">
                <label class="form-label">Tipe Kamar</label>
                <input type="text" name="tipe" class="form-control" value="<?php echo $data['tipe']; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Nama Kamar Kos</label>
                <input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Fasilitas</label>
                <textarea name="fasilitas" class="form-control" rows="3" required><?php echo $data['fasilitas']; ?></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Ukuran Ruangan</label>
                <input type="text" name="uk_ruangan" class="form-control" value="<?php echo $data['uk_ruangan']; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Harga</label>
                <input type="text" name="harga" class="form-control" value="<?php echo $data['harga']; ?>" required>
            </div>

            <button type="submit" class="btn btn-primary" name="update">Update</button>
            <a href="index2.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>