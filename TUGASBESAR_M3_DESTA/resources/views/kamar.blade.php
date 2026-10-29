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
    
    {{-- Tombol Tambah Data ke route Laravel --}}
    <a href="{{ route('kamar.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

    <table class="table">
        <thead>
            <tr>
                <th>NO</th>
                <th>TIPE</th>
                <th>KAMAR KOS</th>
                <th>FASILITAS KAMAR</th>    
                <th>UKURAN RUANGAN</th>
                <th>HARGA</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            {{-- Menggunakan sintaks Blade @forelse khas Laravel --}}
            @forelse ($kamar as $index => $row)
            <tr>
                <th>{{ $index + 1 }}</th>
                <td>{{ $row->tipe }}</td>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->fasilitas }}</td>
                <td>{{ $row->uk_ruangan }}</td>
                <td>{{ $row->harga }}</td>
                <td>
                    {{-- Tombol Edit --}}
                    <a href="{{ route('kamar.edit', $row->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    
                    {{-- Form Hapus dengan metode DELETE & Token CSRF khas Laravel --}}
                    <form action="{{ route('kamar.destroy', $row->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="text-center text-muted">Belum ada data kamar.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>