<!DOCTYPE html>
<html>
<head>
    <?php include 'includes/header.php'; ?>
    <title>Kelola Absensi</title>
</head>

<body>

<?php include 'includes/navbar.php'; ?>

<div class="container">

    <h2>Kelola Data Absensi</h2>

    <button>Tambah</button>
    <button>Edit</button>
    <button>Hapus</button>

    <table border="1" width="100%">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kegiatan</th>
            <th>Tanggal</th>
            <th>Status</th>
        </tr>

        <tr>
            <td>1</td>
            <td>Farhan</td>
            <td>Rapat Pleno</td>
            <td>21/05/2026</td>
            <td>Hadir</td>
        </tr>
    </table>

</div>

<?php include 'includes/footer.php'; ?>

</body>
</html>