<!DOCTYPE html>
<html>
<head>
    <title>Sistem Galeri Foto</title>
</head>
<body>

<h1>Sistem Galeri Foto</h1>

<a href="#">Tambah Data</a>

<hr>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Deskripsi</th>
        <th>Gambar</th>
    </tr>

    <?php $no=1; ?>
    <?php foreach($galeri as $g): ?>

    <tr>
        <td><?= $no++ ?></td>
        <td><?= $g['judul'] ?></td>
        <td><?= $g['deskripsi'] ?></td>
        <td><?= $g['gambar'] ?></td>
    </tr>

    <?php endforeach; ?>

</table>

</body>
</html>