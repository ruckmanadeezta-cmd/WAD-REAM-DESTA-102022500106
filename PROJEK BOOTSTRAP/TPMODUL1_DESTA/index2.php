<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul Master Kamar</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <h1>MANAJEMEN KAMAR</h1>
    <a href="tambah.php" class="btn btn-primary mb-3">Tambah Data</a>
    <table class="table">
        <thead>
            <tr>
                <th>NO</th>
                <th>TIPE</th>
                <th>KAMAR KOS</th>
                <th>FASILITAS KAMAR</th>    
                <th>UKURAN RUANGAN</th>
                <th>HARGA</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM kamar");
            while ($row = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <th><?php echo $no++; ?></th>
                <td><?php echo $row['tipe']; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['fasilitas']; ?></td>
                <td><?php echo $row['uk_ruangan']; ?></td>
                <td><?php echo $row['harga']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                    <a href="hapus.php?id=<?php echo $row['id']; ?>"onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>