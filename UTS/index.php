<?php
$host = 'localhost';
$port = '5432';
$dbname = 'bacabukuonline_db';       
$user = 'postgres';
$pass = '311205';                    

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass");
if (!$conn) {
    die('Koneksi gagal: ' . pg_last_error());
}

pg_set_client_encoding($conn, 'UTF8');

$sql = '
    SELECT 
        id AS "ID",
        judul AS "Judul",
        "Penulis" AS "Penulis",
        "Sinopsis" AS "Sinopsis"
    FROM public."TB_BacaBukuOnline"
    ORDER BY id ASC;
';

$result = pg_query($conn, $sql);
if (!$result) {
    die('Query gagal: ' . pg_last_error($conn));
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Baca Buku Online</title>
    <style>
        body {
            font-family: Arial, sans-serif;
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
            font-size: 22px;
            letter-spacing: 1px;
        }
        h2 {
            text-align: center;
            margin-top: 30px;
            color: #800000;
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
        }
    </style>
</head>
<body>
    <header>
        <h1>Baca Buku Online</h1>
    </header>
    <h2>Daftar Buku</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Sinopsis</th>
        </tr>

        <?php
        while ($row = pg_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['ID']}</td>
                    <td>{$row['Judul']}</td>
                    <td>{$row['Penulis']}</td>
                    <td>{$row['Sinopsis']}</td>
                  </tr>";
        }
        ?>
    </table>
    <footer>
        <p>© 2025 Baca Buku Online</p>
    </footer>
</body>
</html>
