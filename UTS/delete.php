<?php
require __DIR__ . '/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') exit('Method tidak diizinkan.');
$id = (int)($_POST['id'] ?? 0);
if ($id <= 0) exit('ID tidak valid.');

try {
    qparams('DELETE FROM public."TB_BacaBukuOnline" WHERE id=$1', [$id]);
    header('Location: index.php');
    exit;
} catch (Throwable $e) {
    echo 'Gagal menghapus: ' . htmlspecialchars($e->getMessage());
}
?>
