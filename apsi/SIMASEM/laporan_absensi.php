<!DOCTYPE html>
<html>
<head>
    <?php include 'includes/header.php'; ?>
    <title>Laporan Absensi</title>
</head>

<body>

<?php include 'includes/navbar.php'; ?>

<div class="container">

    <h2>Laporan Absensi</h2>

    <button>Export PDF</button>
    <button>Export Excel</button>

    <table border="1" width="100%">
        <tr>
            <th>No</th>
            <th>Nama Kegiatan</th>
            <th>Tanggal</th>
            <th>Jumlah Hadir</th>
        </tr>

        <tr>
            <td>1</td>
            <td>Rapat Kerja</td>
            <td>20/05/2026</td>
            <td>18</td>
        </tr>
    </table>

</div>

<?php include 'includes/footer.php'; ?>

</body>
</html>