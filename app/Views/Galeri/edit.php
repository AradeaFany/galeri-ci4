<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

<div class="card shadow">

<div class="card-header bg-warning">
    <h4>Edit Data Galeri</h4>
</div>

<div class="card-body">

<form action="<?= base_url('galeri/update/'.$galeri['id']) ?>" method="post" enctype="multipart/form-data">

<div class="mb-3">
<label>Judul</label>
<input type="text"
name="judul"
value="<?= $galeri['judul'] ?>"
class="form-control">
</div>

<div class="mb-3">
<label>Deskripsi</label>
<textarea name="deskripsi"
class="form-control"><?= $galeri['deskripsi'] ?></textarea>
</div>

<div class="mb-3">

<label>Gambar Saat Ini</label>

<br>

<img
src="<?= base_url('assets/img/upload/'.$galeri['gambar']) ?>"
width="150"
class="img-thumbnail">

</div>

<div class="mb-3">
<label>Ganti Gambar</label>

<input
type="file"
name="gambar"
class="form-control">
</div>

<button class="btn btn-warning">
Update
</button>

<a href="<?= base_url('galeri') ?>"
class="btn btn-secondary">
Kembali
</a>

</form>

</div>
</div>
</div>

</body>
</html>