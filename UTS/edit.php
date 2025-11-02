<?php
require __DIR__ . '/koneksi.php';

$id = (int)($_GET['id'] ?? 0);
if ($id <= 0) exit('ID tidak valid.');

$res = qparams('SELECT * FROM public."TB_BacaBukuOnline" WHERE id=$1', [$id]);
$row = pg_fetch_assoc($res);
if (!$row) exit('Data tidak ditemukan.');

$err = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = trim($_POST['judul'] ?? '');
    $penulis = trim($_POST['penulis'] ?? '');
    $sinopsis = trim($_POST['sinopsis'] ?? '');

    if ($judul === '' || $penulis === '') {
        $err = 'Judul dan Penulis wajib diisi.';
    } else {
        try {
            qparams('UPDATE public."TB_BacaBukuOnline" SET judul=$1, "Penulis"=$2, "Sinopsis"=$3 WHERE id=$4',
                [$judul, $penulis, $sinopsis, $id]);
            header('Location: index.php');
            exit;
        } catch (Throwable $e) {
            $err = $e->getMessage();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Ubah Buku - Baca Buku Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #fafafa;
            margin: 0;
            padding: 0;
        }
        header {
            background: #800000;
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 22px;
            letter-spacing: 1px;
        }
        h2 {
            text-align: center;
            margin-top: 30px;
            color: #800000;
        }
        form {
            width: 60%;
            margin: 30px auto;
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        footer {
            text-align: center;
            padding: 12px;
            background: #800000;
            color: white;
            margin-top: 40px;
        }

    </style>
</head>
<body>
    <header>
        <h1>Baca Buku Online</h1>
    </header>

    <h2>Ubah Buku</h2>

    <?php if ($err): ?>
        <div class="alert alert-danger text-center" style="width: 60%; margin: 0 auto;"><?= htmlspecialchars($err) ?></div>
    <?php endif; ?>

    <form method="post">
        <div class="mb-3">
            <label class="form-label">Judul</label>
            <input name="judul" value="<?= htmlspecialchars($row['judul']) ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Penulis</label>
            <input name="penulis" value="<?= htmlspecialchars($row['Penulis']) ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Sinopsis</label>
            <textarea name="sinopsis" class="form-control" rows="4"><?= htmlspecialchars($row['Sinopsis']) ?></textarea>
        </div>
        <div class="text-center">
            <button class="btn btn-primary">Simpan Perubahan</button>
            <a href="index.php" class="btn btn-secondary">Batal</a>
        </div>
    </form>

    <footer>
        <p>© 2025 Baca Buku Online</p>
    </footer>
</body>
</html>
