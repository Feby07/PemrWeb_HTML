<?php
require __DIR__ . '/koneksi.php';

$res = q('
    SELECT 
        id AS "ID",
        judul AS "Judul",
        "Penulis" AS "Penulis",
        "Sinopsis" AS "Sinopsis"
    FROM public."TB_BacaBukuOnline"
    ORDER BY id ASC
');

$rows = pg_fetch_all($res) ?: [];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Baca Buku Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: "Segoe UI", "Helvetica Neue", Arial, sans-serif;
            background: #fafafa;
            margin: 0;
            padding: 0;
            color: #333;
        }
        header {
            background: #800000;
            color: white;
            text-align: center;
            padding: 20px;
        }
        header h1 {
            font-size: 36px;
            letter-spacing: 0.5px;
            font-weight: 600;
            text-transform: uppercase;
        }
        h2 {
            text-align: center;
            margin-top: 30px;
            color: #800000;
            font-size: 26px;
            font-weight: 600;
        }
        table {
            width: 85%;
            margin: 30px auto;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            border-radius: 6px;
            overflow: hidden;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px 15px;
            text-align: left;
        }
        th {
            background: #a52a2a;
            color: white;
            text-transform: uppercase;
            font-size: 14px;
            letter-spacing: 0.5px;
        }
        tr:nth-child(even) {
            background-color: #f9f2f2;
        }
        tr:hover {
            background-color: #ffe6e6;
        }
        footer {
            text-align: center;
            padding: 12px;
            background: #800000;
            color: white;
            margin-top: 40px;
            font-size: 14px;
            letter-spacing: 0.3px;
        }
        .btn {
            padding: 6px 10px;
            border-radius: 6px;
            text-decoration: none;
            margin-right: 6px;
        }
        .btn-primary {
            background: #800000;
            color: white;
        }
        .btn-warning {
            background: #f5b342;
            color: white;
        }
        .btn-danger {
            background: #b22222;
            color: white;
        }
    </style>
</head>
<body>
    <header>
        <h1>Baca Buku Online</h1>
    </header>

    <h2>Daftar Buku</h2>

    <div style="text-align:center; margin-bottom: 20px;">
        <a class="btn btn-primary" href="create.php">+ Tambah Buku</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Sinopsis</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php if (!$rows): ?>
            <tr><td colspan="5" style="text-align:center;">Belum ada data.</td></tr>
        <?php else: foreach ($rows as $r): ?>
            <tr>
                <td><?= htmlspecialchars($r['ID']) ?></td>
                <td><?= htmlspecialchars($r['Judul']) ?></td>
                <td><?= htmlspecialchars($r['Penulis']) ?></td>
                <td><?= htmlspecialchars($r['Sinopsis']) ?></td>
                <td>
                    <a class="btn btn-warning" href="edit.php?id=<?= urlencode($r['ID']) ?>">Ubah</a>
                    <a href="#" class="btn btn-danger" onclick="if(confirm('Hapus buku ini?')) document.getElementById('deleteForm<?= $r['ID'] ?>').submit();">Hapus</a>
                    <form id="deleteForm<?= $r['ID'] ?>" action="delete.php" method="post" style="display:none;">
                        <input type="hidden" name="id" value="<?= htmlspecialchars($r['ID']) ?>">
                    </form>
                </td>
            </tr>
        <?php endforeach; endif; ?>
        </tbody>
    </table>

    <footer>
        <p>© 2025 Baca Buku Online</p>
    </footer>
</body>
</html>
