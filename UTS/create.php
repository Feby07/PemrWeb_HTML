<?php
require __DIR__ . '/koneksi.php';

$err = '';
$judul = $penulis = $sinopsis = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul   = trim($_POST['judul'] ?? '');
    $penulis = trim($_POST['penulis'] ?? '');
    $sinopsis = trim($_POST['sinopsis'] ?? '');

    if ($judul === '') {
        $err = 'Judul wajib diisi.';
    } else {
        try {
            qparams(
                'INSERT INTO public."TB_BacaBukuOnline" (judul, "Penulis", "Sinopsis") VALUES ($1, NULLIF($2, \'\'), NULLIF($3, \'\'))',
                [$judul, $penulis, $sinopsis]
            );
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
  <title>Tambah Buku</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #fafafa;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .form-container {
      background: white;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
      width: 400px;
    }
    h1 {
      text-align: center;
      color: #800000;
      margin-bottom: 20px;
    }
    label {
      display: block;
      margin-top: 12px;
      font-weight: bold;
      color: #333;
    }
    input[type="text"], textarea {
      width: 100%;
      padding: 8px;
      margin-top: 6px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
      font-size: 14px;
    }
    textarea {
      resize: vertical;
      min-height: 80px;
    }
    .btn {
      padding: 8px 16px;
      margin-top: 16px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 14px;
    }
    .btn-save {
      background-color: #800000;
      color: white;
    }
    .btn-back {
      background-color: #a52a2a;
      color: white;
      margin-left: 8px;
    }
    .alert-error {
      background-color: #ffe6e6;
      border: 1px solid #e99;
      padding: 10px;
      border-radius: 5px;
      margin-bottom: 12px;
      color: #b22222;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h1>Tambah Buku</h1>

    <?php if ($err): ?>
      <div class="alert-error"><?= htmlspecialchars($err) ?></div>
    <?php endif; ?>

    <form method="post">
      <label>Judul</label>
      <input type="text" name="judul" value="<?= htmlspecialchars($judul) ?>" required>

      <label>Penulis</label>
      <input type="text" name="penulis" value="<?= htmlspecialchars($penulis) ?>">

      <label>Sinopsis</label>
      <textarea name="sinopsis"><?= htmlspecialchars($sinopsis) ?></textarea>

      <div style="text-align: center;">
        <button class="btn btn-save" type="submit">Simpan</button>
        <a href="index.php" class="btn btn-back">Kembali</a>
      </div>
    </form>
  </div>
</body>
</html>
