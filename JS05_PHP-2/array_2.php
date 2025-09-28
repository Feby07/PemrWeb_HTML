<!DOCTYPE html>
<html>
<head>
    <title>Array Asosiatif</title>
    <style>
        table {
            border-collapse: collapse;
            width: 300px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th {
            background-color: lightblue;
        }
        td, th {
            padding: 8px;
        }
    </style>
</head>
<body>
<?php
    $Dosen = [
        'nama' => 'Elok Nur Hamdana',
        'domisili' => 'Malang',
        'jenis_kelamin' => 'Perempuan'
    ];
?>

<h2 style="text-align:center;">Data Dosen</h2>
<table align="center">
    <tr>
        <th>Data</th>
        <th>Isi</th>
    </tr>
    <tr>
        <td>Nama</td>
        <td><?php echo $Dosen['nama']; ?></td>
    </tr>
    <tr>
        <td>Domisili</td>
        <td><?php echo $Dosen['domisili']; ?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td><?php echo $Dosen['jenis_kelamin']; ?></td>
    </tr>
</table>

</body>
</html>
