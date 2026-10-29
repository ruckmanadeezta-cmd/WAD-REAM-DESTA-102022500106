<!DOCTYPE html>
<html lang="id">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-4">
    <h2>Tambah Data Kamar</h2>
    <form method="post">
        <div class="mb-3">
            <label>Tipe Kamar</label>
            <input type="text" name="tipe" required>
        </div>

        <div class="mb-3">
            <label>Nama Kamar Kos</label>
            <input type="text" name="nama" required>
        </div>

        <div class="mb-3">
            <label>Fasilitas</label>
            <textarea name="fasilitas" required></textarea>
        </div>

        <div class="mb-3">
            <label>Ukuran Ruangan</label>
            <textarea name="uk_ruangan" required></textarea>
        </div>

        <div class="mb-3">
    <label>Harga</label>
    <textarea name="harga" required></textarea>
</div>
        <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
        <a href="index2.php" class="btn btn-primary ">Kembali</a>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        include 'koneksi.php';
        $tipe = $_POST['tipe'];
        $nama = $_POST['nama'];
        $fasilitas = $_POST['fasilitas'];
        $uk_ruangan = $_POST['uk_ruangan'];
        $harga = $_POST['harga'];

        $query = mysqli_query($koneksi, "INSERT INTO kamar (tipe, nama, fasilitas, uk_ruangan, harga) VALUES ('$tipe', '$nama', '$fasilitas', '$uk_ruangan', '$harga')");
        if ($query) {
            header("Location: index2.php");
        } else {
            echo "Gagal menambah data!";
        }
    }
    
    ?>
</body>
</html>
}
