<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Galeri Foto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow border-0">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">📸 Sistem Galeri Foto</h3>
        </div>

        <div class="card-body">

            <div class="d-flex justify-content-between mb-3">
                <h5>Daftar Galeri</h5>

                <a href="/galeri/create" class="btn btn-success">
                    + Tambah Data
                </a>
            </div>

            <table class="table table-bordered table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th width="70">No</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th width="150">Gambar</th>
                    </tr>
                </thead>

                <tbody>

                <?php if(empty($galeri)): ?>

                    <tr>
                        <td colspan="4" class="text-center text-muted">
                            Belum ada data galeri
                        </td>
                    </tr>

                <?php else: ?>

                    <?php $no = 1; ?>

                    <?php foreach($galeri as $g): ?>

                    <tr>
                        <td><?= $no++ ?></td>

                        <td><?= $g['judul'] ?></td>

                        <td><?= $g['deskripsi'] ?></td>

                        <td>
                            <img src="<?= base_url('assets/img/upload/'.$g['gambar']) ?>"
     width="100"
     class="img-thumbnail">
                        </td>
                    </tr>

                    <?php endforeach; ?>

                <?php endif; ?>

                </tbody>
            </table>

        </div>
    </div>

</div>

</body>
</html>